<?php

declare(strict_types=1);

namespace Orchard\Services;

use Orchard\Domain\Orchard;
use Orchard\Domain\Plants\Fruit;
use Orchard\Factories\OrchardBuilder;
use Orchard\Factories\PlantFactories\AppleFactory;
use Orchard\Factories\PlantFactories\PearFactory;

/**
 * Сервис, создающий фруктовый сад со случайными характеристиками,
 * учитывающими ограничения бизнес-логики
 */
class RandomOrchardService
{
    protected const NUM_APPLE_TREES = 10;
    protected const NUM_PEAR_TREES  = 15;

    protected const APPLE_WEIGHT_MIN = 150;
    protected const APPLE_WEIGHT_MAX = 180;

    protected const PEAR_WEIGHT_MIN = 130;
    protected const PEAR_WEIGHT_MAX = 170;

    protected const APPLES_PER_TREE_MIN = 40;
    protected const APPLES_PER_TREE_MAX = 50;

    protected const PEAR_PER_TREE_MIN = 0;
    protected const PEAR_PER_TREE_MAX = 20;

    public function __construct(
        protected readonly OrchardBuilder $builder,
        protected readonly AppleFactory $appleFactory,
        protected readonly PearFactory $pearFactory,
    ) {
    }

    public function createRandomOrchard(): Orchard
    {
        for ($i = 0; $i < static::NUM_APPLE_TREES; $i++) {
            $this->builder->addTree(
                $this->appleFactory->tree(
                    fruits: $this->createArrayOfApples()
                )
            );
        }

        for ($i = 0; $i < static::NUM_PEAR_TREES; $i++) {
            $this->builder->addTree(
                $this->pearFactory->tree(
                    fruits: $this->createArrayOfPears()
                )
            );
        }

        return $this->builder->build();
    }

    /**
     * @return Fruit[]
     */
    protected function createArrayOfApples(): array
    {
        $fruits    = [];
        $numApples = random_int(static::APPLES_PER_TREE_MIN, static::APPLES_PER_TREE_MAX);

        for ($i = 0; $i < $numApples; $i++) {
            $fruits[] = $this->appleFactory->fruit(
                weight: $this->getRandomAppleWeight()
            );
        }

        return $fruits;
    }

    /**
     * @return Fruit[]
     */
    protected function createArrayOfPears(): array
    {
        $fruits   = [];
        $numPears = random_int(static::PEAR_PER_TREE_MIN, static::PEAR_PER_TREE_MAX);

        for ($i = 0; $i < $numPears; $i++) {
            $fruits[] = $this->pearFactory->fruit(
                weight: $this->getRandomPearWeight()
            );
        }

        return $fruits;
    }

    protected function getRandomAppleWeight(): int
    {
        return random_int(static::APPLE_WEIGHT_MIN, static::APPLE_WEIGHT_MAX);
    }

    protected function getRandomPearWeight(): int
    {
        return random_int(static::PEAR_WEIGHT_MIN, static::PEAR_WEIGHT_MAX);
    }
}
