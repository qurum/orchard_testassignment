<?php

declare(strict_types=1);

namespace Orchard\Domain\Plants;

/**
 * Типы растений, растущих в саду
 */
enum PlantType: string
{
    case APPLE = 'apple';
    case PEAR  = 'pear';

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return match ($this) {
            self::APPLE => 'Яблоня',
            self::PEAR  => 'Груша',
        };
    }
}
