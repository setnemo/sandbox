<?php

namespace Design\Creational\Singleton;

class Singleton
{
    private static $instances = [];

    protected function __construct()
    {
        // do nothing
    }

    protected function __clone()
    {
        // do nothing
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot un-serialize singleton");
    }

    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static;
        }
        return self::$instances[$subclass];
    }
}
