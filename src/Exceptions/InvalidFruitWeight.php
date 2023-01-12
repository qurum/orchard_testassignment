<?php

declare(strict_types=1);

namespace Orchard\Exceptions;

use Throwable;

/**
 * Неверная масса фрукта
 */
class InvalidFruitWeight extends OrchardException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = "Недопустимая масса фрукта",
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
