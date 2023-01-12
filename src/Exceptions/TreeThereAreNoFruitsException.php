<?php

declare(strict_types=1);

namespace Orchard\Exceptions;

use Throwable;

/**
 * Попытка собрать фрукт при отсутствии фруктов
 */
class TreeThereAreNoFruitsException extends OrchardException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $message = "Попытка собрать фрукт с дерева, на котором нет фруктов",
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
