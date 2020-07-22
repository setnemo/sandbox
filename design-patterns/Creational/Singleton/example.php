<?php

use Design\Creational\Singleton\Config;
use Design\Creational\Singleton\Logger;

require __DIR__ . '/../../../vendor/autoload.php';

function clientCode()
{
    Logger::log("Started!");

    $l1 = Logger::getInstance();
    $l2 = Logger::getInstance();
    if ($l1 === $l2) {
        Logger::log("Logger has a single instance.");
    } else {
        Logger::log("Loggers are different.");
    }

    $config1 = Config::getInstance();
    $login = "test_login";
    $password = "test_password";
    $config1->setValue("login", $login);
    $config1->setValue("password", $password);

    $config2 = Config::getInstance();
    if ($login == $config2->getValue("login") &&
        $password == $config2->getValue("password")
    ) {
        Logger::log("Config singleton also works fine.");
    }

    Logger::log("Finished!");
}

clientCode();
