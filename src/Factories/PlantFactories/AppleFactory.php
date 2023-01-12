<?php

declare(strict_types=1);

namespace Orchard\Factories\PlantFactories;

use Orchard\Domain\Plants\PlantType;

/**
 * Конкретная фабрика для яблок
 */
class AppleFactory extends PlantFactory
{
    protected const FRUIT_NAME         = 'яблоко';
    protected const TREE_NAME          = 'яблоня';
    protected const PLANT_TYPE         = PlantType::APPLE;
    protected const MIN_WEIGHT_IN_GRAM = 150;
    protected const MAX_WEIGHT_IN_GRAM = 180;
}
