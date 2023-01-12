<?php

declare(strict_types=1);

namespace Orchard\Factories\VO;

use Orchard\Domain\VO\Name\Name;
use Orchard\Exceptions\InvalidWeightValueException;
use Orchard\Domain\VO\Weight\Type;
use Orchard\Domain\VO\Weight\Weight;
use Orchard\Factories\Reflection;

/**
 * Фабрика VO масс
 */
class WeightFactory
{
    use Reflection;

    /**
     * Создать объект массы из данного числа грамм
     *
     * @param int $value
     * @return Weight
     * @throws \ReflectionException
     */
    public function fromGram(int $value): Weight
    {
        if ($value < 0) {
            throw new InvalidWeightValueException();
        }

        /** @var Weight $weight */
        $weight = $this->getInstance(Weight::class, [$value, Type::GRAM]);

        return $weight;
    }
}
