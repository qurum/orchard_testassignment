<?php

declare(strict_types=1);

namespace Orchard\Factories;

use Orchard\Domain\Plants\Tree;
use Orchard\Implementations\Orchard;

/**
 * Строитель сада
 */
class OrchardBuilder
{
    use Reflection;

    /**
     * @var Tree[]
     */
    protected array $trees = [];

    /**
     * Запланировать посадку дерева
     *
     * @param Tree $tree
     * @return $this
     */
    public function addTree(Tree $tree): static
    {
        $this->trees[$tree->id()->getValue()] = $tree;

        return $this;
    }

    /**
     * Создать сад
     *
     * @return Orchard
     * @throws \ReflectionException
     */
    public function build(): Orchard
    {
        /** @var Orchard $orchard */
        $orchard = $this->getInstance(Orchard::class, [$this->trees]);

        $this->trees = [];

        return $orchard;
    }
}
