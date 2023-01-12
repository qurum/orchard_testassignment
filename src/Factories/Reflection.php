<?php

declare(strict_types=1);

namespace Orchard\Factories;

/**
 * Позволяет создавать с помощью рефлексии объекты, имеющие не-public конструктор
 */
trait Reflection
{
    /**
     * @param class-string $className
     * @param mixed[] $params
     * @return object
     * @throws \ReflectionException
     */
    protected function getInstance(string $className, array $params): object
    {
        $reflectionClass = new \ReflectionClass($className);
        $constructor     = $reflectionClass->getConstructor();

        if (is_null($constructor)) {
            throw new \RuntimeException();
        }

        $constructor->setAccessible(true);
        $object = $reflectionClass->newInstanceWithoutConstructor();
        $constructor->invoke($object, ...$params);

        return $object;
    }
}
