<?php

declare(strict_types=1);

namespace Orchard\Domain\Plants;

use Orchard\Domain\VO\ID\ID;
use Orchard\Domain\VO\Name\Name;
use Traversable;

/**
 * Интерфейс дерева
 */
interface Tree
{
    /**
     * Вернуть ID дерева
     *
     * @return ID
     */
    public function id(): ID;

    /**
     * Вернуть название дерева
     *
     * @return Name
     */
    public function name(): Name;

    /**
     * Вернуть тип дерева
     *
     * @return PlantType
     */
    public function type(): PlantType;

    /**
     * Есть ли на дереве фрукты
     *
     * @return bool
     */
    public function hasFruit(): bool;

    /**
     * Сорвать с дерева фрукт; этот фрукт перестанет расти на дереве
     *
     * @return Fruit
     */
    public function getFruit(): Fruit;

    /**
     * Перечислить фрукты, имеющиеся на дереве, не срывая их
     *
     * @return Traversable<int, Fruit>
     */
    public function fruits(): Traversable;
}
