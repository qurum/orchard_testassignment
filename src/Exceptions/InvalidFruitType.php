<?php

declare(strict_types=1);

namespace Orchard\Exceptions;

use Throwable;

/**
 * Неверный тип фрукта
 */
class InvalidFruitType extends OrchardException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "Недопустимый тип фрукта", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
