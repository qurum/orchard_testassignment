<?php

declare(strict_types=1);

namespace Orchard\Domain\VO\Name;

use Orchard\Domain\VO\AbstractVO;

/**
 * VO для названия
 */
class Name extends AbstractVO
{
    /**
     * @var string
     */
    protected mixed $value = '';

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
