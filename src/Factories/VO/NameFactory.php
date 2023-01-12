<?php

declare(strict_types=1);

namespace Orchard\Factories\VO;

use Orchard\Domain\VO\Name\Name;
use Orchard\Factories\Reflection;

/**
 * Фадрика VO для названий
 */
class NameFactory
{
    use Reflection;

    /**
     * Создать VO названия из строки
     *
     * @param string $value
     * @return Name
     * @throws \ReflectionException
     */
    public function fromString(string $value): Name
    {
        /** @var Name $name */
        $name = $this->getInstance(Name::class, [$value]);

        return $name;
    }
}
