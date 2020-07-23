<?php

namespace Design\Behavioral\Mediator;

class Events extends \Design\Creational\Singleton\Singleton
{
    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new EventDispatcher();
        }
        return self::$instances[$subclass];
    }
}
