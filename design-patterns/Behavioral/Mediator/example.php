<?php

use Design\Behavioral\Mediator\Events;
use Design\Behavioral\Mediator\Logger;
use Design\Behavioral\Mediator\OnboardingNotification;
use Design\Behavioral\Mediator\UserRepository;

require __DIR__ . '/../../../vendor/autoload.php';

$repository = new UserRepository;
Events::getInstance()->attach($repository, "facebook:update");

$logger = new Logger(__DIR__ . "/log.txt");
Events::getInstance()->attach($logger, "*");

$onboarding = new OnboardingNotification("1@example.com");
Events::getInstance()->attach($onboarding, "users:created");

$repository->initialize(__DIR__ . "/users.csv");

$user = $repository->createUser([
    "name" => "John Smith",
    "email" => "john99@example.com",
]);

$user->delete();
