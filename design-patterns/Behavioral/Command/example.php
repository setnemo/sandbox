<?php

use Design\Behavioral\Command\IMDBGenresScrapingCommand;
use Design\Behavioral\Command\Queue;

require __DIR__ . '/../../../vendor/autoload.php';

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMDBGenresScrapingCommand);
}

$queue->work();