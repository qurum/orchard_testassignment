<?php

declare(strict_types=1);

namespace Orchard\Domain\VO\Weight;

use Orchard\Exceptions\UnsupportedWeightTypeException;
use Orchard\Domain\VO\AbstractVO;

/**
 * VO для массы
 */
class Weight extends AbstractVO
{
    /**
     * Тип (разный для разных единиц измерения)
     *
     * @var Type
     */
    protected readonly Type $type;

    /**
     * Целочисленное значение
     *
     * @var int
     */
    protected mixed $value = 0;

    /**
     * @param int $value
     * @param Type $type
     */
    final protected function __construct(int $value, Type $type)
    {
        $this->type = $type;
        parent::__construct($value);
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return Type
     */
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * Выполнить сложение. Поскольку этот объект иммутабелен, создаётся новый объект массы.
     *
     * @param Weight $weight
     * @return static
     */
    public function performAddition(self $weight): static
    {
        if ($weight->getType() !== Type::GRAM) {
            throw new UnsupportedWeightTypeException();
        }

        return new static($this->getValue() + $weight->getValue(), Type::GRAM);
    }
}
