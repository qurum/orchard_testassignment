<?php

declare(strict_types=1);

namespace Orchard\Factories\VO;

use Orchard\Domain\VO\ID\ID;
use Orchard\Factories\Reflection;
use Ramsey\Uuid\Uuid;

/**
 * Фабрика VO для ID.
 * В этой реализации все создаваемые ID - uuid v4
 */
class IDFactory
{
    use Reflection;

    /**
     * Создаёт VO для ID
     *
     * @return ID
     * @throws \ReflectionException
     */
    public function create(): ID
    {
        $uuid = Uuid::uuid4();

        /** @var ID $id */
        $id = $this->getInstance(ID::class, [$uuid->toString()]);

        return  $id;
    }
}
