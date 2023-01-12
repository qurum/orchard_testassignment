<?php

declare(strict_types=1);

namespace Orchard\Domain\VO\ID;

use Orchard\Domain\VO\AbstractVO;

/**
 * VO для ID
 */
class ID extends AbstractVO
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
