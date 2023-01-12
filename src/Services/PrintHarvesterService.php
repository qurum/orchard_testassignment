<?php

declare(strict_types=1);

namespace Orchard\Services;

use Orchard\Domain\Harvester;
use Orchard\Domain\Plants\PlantType;

/**
 * Сервис, печатающий информацию о сборщике
 */
class PrintHarvesterService
{
    /**
     * Напечатать информацию о сборщике:
     *   - количество собранных фруктов, сгруппированных по типу
     *   - общая масса собранных фруктов, сгруппированных по типу
     * @param Harvester $harvester
     * @return void
     */
    public function print(Harvester $harvester): void
    {
        foreach (PlantType::cases() as $plantType) {
            echo sprintf(
                "%s: для этого типа деревьев собрано %d фруктов общей массой %d грамм.\n",
                $plantType->getLabel(),
                $harvester->count($plantType),
                $harvester->weight($plantType)->getValue(),
            );
        }
    }
}
