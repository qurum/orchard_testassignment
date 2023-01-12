<?php

declare(strict_types=1);

$builder = new \DI\ContainerBuilder();

$builder->useAutowiring(true);

$builder->addDefinitions([
    \Orchard\Domain\Harvester::class => \DI\autowire(\Orchard\Implementations\Harvester::class),
]);

return $builder->build();
