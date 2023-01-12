<?php

declare(strict_types=1);

namespace Orchard\Domain\Plants;

use Orchard\Domain\VO\ID\ID;
use Orchard\Domain\VO\Name\Name;
use Orchard\Domain\VO\Weight\Weight;

/**
 * Интерфейс фрукта
 */
interface Fruit
{
    /**
     * Вернуть ID фрукта
     *
     * @return ID
     */
    public function id(): ID;

    /**
     * Вернуть название фрукта
     *
     * @return Name
     */
    public function name(): Name;

    /**
     * Вернуть тип фрукта
     *
     * @return PlantType
     */
    public function type(): PlantType;

    /**
     * Вернуть массу фрукта
     *
     * @return Weight
     */
    public function weight(): Weight;
}
