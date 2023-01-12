<?php

declare(strict_types=1);

use Orchard\Domain\Harvester;
use Orchard\Services\PrintHarvesterService;
use Orchard\Services\RandomOrchardService;

require_once __DIR__ . '/vendor/autoload.php';
$container = require __DIR__ . '/container.php';

$orchard = $container
    ->get(RandomOrchardService::class)
    ->createRandomOrchard();

$harvester = $container->get(Harvester::class);
$harvester->performHarvesting($orchard);

$container
    ->get(PrintHarvesterService::class)
    ->print($harvester);
