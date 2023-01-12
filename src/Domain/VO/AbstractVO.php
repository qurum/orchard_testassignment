<?php

declare(strict_types=1);

namespace Orchard\Domain\VO;

/**
 * Абстрактный базовый класс всех VO
 */
abstract class AbstractVO
{
    /**
     * @param mixed $value
     */
    protected function __construct(
        protected mixed $value
    ) {
    }

    /**
     * @return mixed
     */
    abstract public function getValue(): mixed;
}
