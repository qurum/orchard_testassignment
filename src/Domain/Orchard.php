<?php

declare(strict_types=1);

namespace Orchard\Domain;

use Orchard\Domain\Plants\Tree;
use Traversable;

/**
 * Интерфейс фруктового сада
 */
interface Orchard
{
    /**
     * Перечислить деревья, имеющиеся в саду
     *
     * @return Traversable<int, Tree>
     */
    public function trees(): Traversable;

    /**
     * Добавить к саду дерево
     *
     * @param Tree $tree
     * @return void
     */
    public function add(Tree $tree): void;
}
