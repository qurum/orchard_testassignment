<?php

declare(strict_types=1);

namespace Orchard\Implementations;

use Orchard\Domain\Plants\PlantType;
use Orchard\Domain\VO\ID\ID;
use Orchard\Domain\VO\Name\Name;
use Orchard\Domain\VO\Weight\Weight;

/**
 * Конкретная реализация класса фрукта
 */
class Fruit implements \Orchard\Domain\Plants\Fruit
{
    protected function __construct(
        protected readonly ID $ID,
        protected readonly Name $name,
        protected readonly PlantType $type,
        protected readonly Weight $weight,
    ) {
    }

    /**
     * @inheritDoc
     */
    public function id(): ID
    {
        return $this->ID;
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
    public function weight(): Weight
    {
        return $this->weight;
    }
}
