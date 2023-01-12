<?php

declare(strict_types=1);

namespace Orchard\Implementations;

use Orchard\Domain\Plants\Tree;
use Traversable;

/**
 * Конкретная реализация фруктового сада,
 * хранящая деревья в массиве
 *
 */
class Orchard implements \Orchard\Domain\Orchard
{
    /**
     * @var Tree[]
     */
    protected array $trees = [];

    /**
     * @param Tree[] $trees
     */
    protected function __construct(
        array $trees,
    ) {
        foreach ($trees as $tree) {
            $this->trees[$tree->id()->getValue()] = $tree;
        }
    }

    /**
     * @inheritDoc
     */
    public function trees(): Traversable
    {
        foreach ($this->trees as $tree) {
            yield $tree;
        }
    }

    /**
     * @inheritDoc
     */
    public function add(Tree $tree): void
    {
        $this->trees[$tree->id()->getValue()] = $tree;
    }
}
