<?php

declare(strict_types=1);

namespace Orchard\Implementations;

use Orchard\Domain\Orchard;
use Orchard\Domain\Plants\PlantType;
use Orchard\Domain\VO\Weight\Weight;
use Orchard\Factories\VO\WeightFactory;
use Traversable;

/**
 * Конкретная реализация класса сборщика, хранящая фрукты в массивах в памяти
 */
class Harvester implements \Orchard\Domain\Harvester
{
    /**
     * Массив, в котором хранятся собранные фрукты.
     *
     * @var \Orchard\Domain\Plants\Fruit[]
     */
    protected array $harvested    = [];

    /**
     * Количество собранных фруктов, сгруппированные по типу
     *
     * @var array<string, int>
     */
    protected array $countByType  = [];

    /**
     * Массы собранных фруктов, сгруппированные по типу
     *
     * @var array<string, Weight>
     */
    protected array $weightByType = [];

    public function __construct(
        protected readonly WeightFactory $weightFactory
    ) {
        foreach (PlantType::cases() as $plantType) {
            $this->countByType[$plantType->value]  = 0;
            $this->weightByType[$plantType->value] = $this->weightFactory->fromGram(0);
        }
    }

    /**
     * @inheritDoc
     */
    public function performHarvesting(Orchard $orchard): void
    {
        foreach ($orchard->trees() as $tree) {
            /** @var \Orchard\Domain\Plants\Tree $tree */
            while ($tree->hasFruit()) {
                $fruit                                     = $tree->getFruit();
                $this->harvested[$fruit->id()->getValue()] = $fruit;
                $this->countByType[$fruit->type()->value]  += 1;

                /** @var Weight $oldWeight */
                $oldWeight                                 = $this->weightByType[$fruit->type()->value];
                $this->weightByType[$fruit->type()->value] = $oldWeight->performAddition($fruit->weight());
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function harvested(): Traversable
    {
        foreach ($this->harvested as $item) {
            yield $item;
        }
    }

    /**
     * @inheritDoc
     */
    public function weight(PlantType $plantType): Weight
    {
        return $this->weightByType[$plantType->value];
    }

    /**
     * @inheritDoc
     */
    public function count(PlantType $plantType): int
    {
        return $this->countByType[$plantType->value];
    }
}
