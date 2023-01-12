<?php

declare(strict_types=1);

namespace Orchard\Factories\PlantFactories;

use Orchard\Domain\Plants\PlantType;

/**
 * Конкретная фабрика для груш
 */
class PearFactory extends PlantFactory
{
    protected const FRUIT_NAME         = 'груша';
    protected const TREE_NAME          = 'груша';
    protected const PLANT_TYPE         = PlantType::PEAR;
    protected const MIN_WEIGHT_IN_GRAM = 130;
    protected const MAX_WEIGHT_IN_GRAM = 170;
}
