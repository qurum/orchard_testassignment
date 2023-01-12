<?php

declare(strict_types=1);

namespace Orchard\Domain;

use Orchard\Domain\Plants\Fruit;
use Orchard\Domain\Plants\PlantType;
use Orchard\Domain\VO\Weight\Weight;
use Traversable;

/**
 * Интерфейс сборщика
 */
interface Harvester
{
    /**
     * Собрать все фрукты в указанном саду
     *
     * @param Orchard $orchard
     * @return void
     */
    public function performHarvesting(Orchard $orchard): void;

    /**
     * Перечислить собранные фрукты
     *
     * @return Traversable<int, Fruit>
     */
    public function harvested(): Traversable;

    /**
     * Вернуть массу собранных фруктов каждого типа
     *
     * @param PlantType $plantType
     * @return Weight
     */
    public function weight(PlantType $plantType): Weight;

    /**
     * Вернуть количество собранных фруктов для каждого типа
     *
     * @param PlantType $plantType
     * @return int
     */
    public function count(PlantType $plantType): int;
}
