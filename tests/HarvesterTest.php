<?php

declare(strict_types=1);

namespace Tests;

use Orchard\Domain\Orchard;
use Orchard\Domain\Plants\Fruit;
use Orchard\Domain\Plants\PlantType;
use Orchard\Domain\Plants\Tree;
use Orchard\Domain\VO\ID\ID;
use Orchard\Factories\VO\WeightFactory;
use Orchard\Implementations\Harvester;
use PHPUnit\Framework\TestCase;

class HarvesterTest extends TestCase
{
    protected const APPLE_WEIGHT = 150;
    protected const PEAR_WEIGHT  = 100;

    /**
     * Количество фруктов, имеющихся в саду,
     * должно совпадать с количеством собранных фруктов
     * для каждого типа PlantType
     *
     * @dataProvider orchardProvider
     */
    public function testCount($orchard)
    {
        $expected = [];
        foreach (PlantType::cases() as $plantType) {
            $expected[$plantType->value] = 0;
        }

        foreach ($orchard->trees() as $tree) {
            foreach ($tree->fruits() as $fruit) {
                ++$expected[$fruit->type()->value];
            }
        }

        $harvester = new Harvester(new WeightFactory());
        $harvester->performHarvesting($orchard);

        foreach (PlantType::cases() as $plantType) {
            self::assertEquals(
                $expected[$plantType->value],
                $harvester->count($plantType),
                'The amount of fruit available in the orchard should be equal to the amount of fruit harvested.'
            );
        }
    }

    /**
     * Суммарная масса фруктов, имеющихся в саду,
     * должна совпадать с суммарной массой собранных фруктов
     * для каждого типа PlantType
     *
     * @dataProvider orchardProvider
     */
    public function testWeight(Orchard $orchard)
    {
        $expected = [];
        foreach (PlantType::cases() as $plantType) {
            $expected[$plantType->value] = 0;
        }

        foreach ($orchard->trees() as $tree) {
            foreach ($tree->fruits() as $fruit) {
                $expected[$fruit->type()->value] += $fruit->weight()->getValue();
            }
        }

        $harvester = new Harvester(new WeightFactory());
        $harvester->performHarvesting($orchard);

        foreach (PlantType::cases() as $plantType) {
            self::assertEquals(
                $expected[$plantType->value],
                $harvester->weight($plantType)->getValue(),
                'The total mass of fruits in the orchard must be equal to the total mass of fruits harvested.'
            );
        }
    }

    /**
     * Массив ID фруктов, имеющихся в саду, должен совпадать
     * с массивом ID собранных фруктов
     *
     * @dataProvider orchardProvider
     */
    public function testHarvested(Orchard $orchard)
    {
        $expectedIDs = [];
        foreach ($orchard->trees() as $tree) {
            foreach ($tree->fruits() as $fruit) {
                $expectedIDs[] = $fruit->id()->getValue();
            }
        }

        $harvester = new Harvester(new WeightFactory());
        $harvester->performHarvesting($orchard);

        $this->assertEqualsCanonicalizing(
            $expectedIDs,
            array_map(
                static fn(Fruit $fruit) => $fruit->id()->getValue(),
                iterator_to_array($harvester->harvested())
            ),
            'The array of fruit IDs in the orchard must be equal to the array of fruit IDs harvested.'
        );
    }

    /**
     * После сбора в саду не должно оставаться несобранных фруктов
     *
     * @dataProvider orchardProvider
     */
    public function testPerformHarvesting(Orchard $orchard)
    {
        $harvester = new Harvester(new WeightFactory());
        $harvester->performHarvesting($orchard);

        $fruits = 0;
        foreach ($orchard->trees() as $tree) {
            foreach ($tree->fruits() as $fruit) {
                ++$fruits;
            }
        }
        $this->assertEquals(
            0,
            $fruits,
            'After harvesting, there should be no fruit left in the orchard'
        );
    }

    /**
     * Провайдер создаёт четыре разных сада:
     *   - без деревьев
     *   - с одной яблоней и одной грушей
     *   - с сотней яблонь и без груш
     *   - со случаными количествами яблонь и груш
     *
     * На каждом дереве растёт ровно один фрукт.
     */
    public function orchardProvider()
    {
        return [
            'No fruits' => [
                $this->orchardWithTrees(
                    numApples: 0,
                    numPears : 0
                ),
            ],

            'One apple and one pear' => [
                $this->orchardWithTrees(
                    numApples: 1,
                    numPears : 1
                ),
            ],

            'One hundred apples' => [
                $this->orchardWithTrees(
                    numApples: 100,
                    numPears : 0
                ),
            ],

            'Random' => [
                $this->orchardWithTrees(
                    numApples: random_int(0, 100),
                    numPears : random_int(0, 100)
                ),
            ],
        ];
    }

    /**
     * создать сад с указанным количеством яблонь и груш
     */
    protected function orchardWithTrees(int $numApples, int $numPears)
    {
        $apples = array_map(
            fn() => $this->mockTree(PlantType::APPLE, [
                $this->mockFruit(PlantType::APPLE, self::APPLE_WEIGHT),
            ]),
            array_fill(0, $numApples, 0)
        );

        $pears = array_map(
            fn() => $this->mockTree(PlantType::PEAR, [
                $this->mockFruit(PlantType::PEAR, self::PEAR_WEIGHT),
            ]),
            array_fill(0, $numPears, 0)
        );

        return $this->mockOrchard([...$apples, ...$pears]);
    }

    /**
     * создать сад с указанным массивом деревьев
     */
    protected function mockOrchard(array $trees)
    {
        $orchard = $this->createMock(Orchard::class);

        $orchard
            ->method('trees')
            ->willReturnCallback(function () use (&$trees) {
                foreach ($trees as $tree) {
                    yield $tree;
                }
            });

        return $orchard;
    }

    /**
     * создать дерево указанного типа с указанным массивом фруктов
     */
    protected function mockTree(PlantType $plantType, array $fruits = [])
    {
        $tree = $this->createMock(Tree::class);

        $tree->method('hasFruit')
            ->willReturnCallback(function () use (&$fruits) {
                return !empty($fruits);
            });

        $tree->method('getFruit')
            ->willReturnCallback(function () use (&$fruits) {
                return array_pop($fruits);
            });

        $tree
            ->method('fruits')
            ->willReturnCallback(function () use (&$fruits) {
                foreach ($fruits as $fruit) {
                    yield $fruit;
                }
            });

        $tree
            ->method('type')
            ->willReturn($plantType);

        $tree
            ->method('id')
            ->willReturn($this->mockId());

        return $tree;
    }

    /**
     * создать фрукт указанного типа с указанной массой
     */
    protected function mockFruit(PlantType $plantType, int $weight = 100)
    {
        $weightFactory = new WeightFactory();

        $fruit = $this->createMock(Fruit::class);
        $fruit->method('type')->willReturn($plantType);
        $fruit->method('weight')->willReturn($weightFactory->fromGram($weight));
        $fruit->method('id')->willReturn($this->mockId());

        return $fruit;
    }

    /**
     * создать ID
     */
    protected function mockId()
    {
        $id = $this->createMock(ID::class);

        $id->method('getValue')
            ->willReturn(uniqid('', true));

        return $id;
    }
}
