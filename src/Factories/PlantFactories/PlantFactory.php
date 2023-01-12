<?php

declare(strict_types=1);

namespace Orchard\Factories\PlantFactories;

use Orchard\Factories\VO\IDFactory;
use Orchard\Factories\VO\NameFactory;
use Orchard\Factories\VO\WeightFactory;
use Orchard\Domain\Plants\Fruit;
use Orchard\Domain\Plants\PlantType;
use Orchard\Domain\Plants\Tree;
use Orchard\Exceptions\InvalidFruitType;
use Orchard\Exceptions\InvalidFruitWeight;
use Orchard\Factories\Reflection;

/**
 * Абстрактная фабрика для растений сада.
 * Умеет создавать:
 *   - дерево
 *   - фрукт
 */
abstract class PlantFactory
{
    use Reflection;

    protected const FRUIT_NAME = '';
    protected const TREE_NAME  = '';

    protected const FRUIT_CLASS = \Orchard\Implementations\Fruit::class;
    protected const TREE_CLASS  = \Orchard\Implementations\Tree::class;

    protected const PLANT_TYPE = null;

    protected const MIN_WEIGHT_IN_GRAM = 0;
    protected const MAX_WEIGHT_IN_GRAM = 0;

    public function __construct(
        protected readonly IDFactory $IDFactory,
        protected readonly NameFactory $nameFactory,
        protected readonly WeightFactory $weightFactory,
    ) {
    }

    /**
     * Тип фабрики
     *
     * @return PlantType
     */
    public function type(): PlantType
    {
        return static::PLANT_TYPE;
    }

    /**
     * Создать дерево
     *
     * @param Fruit[] $fruits
     * @return Tree
     */
    public function tree(array $fruits): Tree
    {
        $this->validateFruits($fruits);

        /** @var Tree $tree */
        $tree = $this->getInstance(static::TREE_CLASS, [
            $this->IDFactory->create(),
            $this->nameFactory->fromString(static::TREE_NAME),
            static::PLANT_TYPE,
            $fruits,
        ]);

        return $tree;
    }

    /**
     * Создать фрукт
     *
     * @param int $weight
     * @return Fruit
     */
    public function fruit(int $weight): Fruit
    {
        $this->validateWeight($weight);

        /** @var Fruit $fruit */
        $fruit = $this->getInstance(static::FRUIT_CLASS, [
            $this->IDFactory->create(),
            $this->nameFactory->fromString(static::FRUIT_NAME),
            static::PLANT_TYPE,
            $this->weightFactory->fromGram($weight),
        ]);

        return $fruit;
    }

    /**
     * Убедиться, что переданный массив действительно состоит из фруктов
     *
     * @param Fruit[] $fruits
     * @return void
     */
    protected function validateFruits(array $fruits): void
    {
        foreach ($fruits as $fruit) {
            if ($fruit->type() !== static::PLANT_TYPE) {
                throw new InvalidFruitType();
            }
        }
    }

    /**
     * Убедиться, что фрукту разрешено иметь указанную массу
     *
     * @param int $weight
     * @return void
     */
    protected function validateWeight(int $weight): void
    {
        if (($weight < static::MIN_WEIGHT_IN_GRAM) || ($weight > static::MAX_WEIGHT_IN_GRAM)) {
            throw new InvalidFruitWeight();
        }
    }
}
