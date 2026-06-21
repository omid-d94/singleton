<?php

namespace Singleton;

class Singleton
{

    private static array $instances = [];

    /**
     * If you need to support several types of Singletons in your app, you can
     * define the basic features of the Singleton in a base class, while moving the
     * actual business logic (like logging) to subclasses.
     */
    protected function __construct()
    {
    }

    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance(?string $subClass = null): self
    {
        $subClass = (empty($subClass) ? self::class : $subClass);
        if (!isset(self::$instances[$subClass]))
            self::$instances[$subClass] = new static();
        return self::$instances[$subClass];
    }
}