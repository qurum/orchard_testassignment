<?php

declare(strict_types=1);

namespace Orchard\Exceptions;

use Throwable;

/**
 * Неподдерживаемый тип веса
 */
class UnsupportedWeightTypeException extends OrchardException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = "Единицы измерения не поддерживаются",
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
