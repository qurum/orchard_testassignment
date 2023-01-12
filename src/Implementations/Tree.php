<?php

declare(strict_types=1);

namespace Orchard\Implementations;

use Orchard\Domain\Plants\Fruit;
use Orchard\Domain\Plants\PlantType;
use Orchard\Domain\VO\ID\ID;
use Orchard\Domain\VO\Name\Name;
use Orchard\Exceptions\TreeThereAreNoFruitsException;
use Traversable;

/**
 * Конкретная реализация дерева,
 * хранящая фрукты в массиве
 */
class Tree implements \Orchard\Domain\Plants\Tree
{
    /**
     * @param ID $id
     * @param Name $name
     * @param PlantType $type
     * @param Fruit[] $fruits
     */
    protected function __construct(
        protected readonly ID $id,
        protected readonly Name $name,
        protected readonly PlantType $type,
        protected array $fruits,
    ) {
    }

    /**
     * @inheritDoc
     */
    public function id(): ID
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function name(): Name
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function type(): PlantType
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function hasFruit(): bool
    {
        return !empty($this->fruits);
    }

    /**
     * @inheritDoc
     */
    public function getFruit(): Fruit
    {
        if (empty($this->fruits)) {
            throw new TreeThereAreNoFruitsException();
        }

        return array_pop($this->fruits);
    }

    /**
     * @return Traversable<int, Fruit>
     */
    public function fruits(): Traversable
    {
        foreach ($this->fruits as $fruit) {
            yield $fruit;
        }
    }
}
