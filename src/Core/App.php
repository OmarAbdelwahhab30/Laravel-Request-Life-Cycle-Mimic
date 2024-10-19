<?php
namespace ServiceContainer\Core;
class App
{

    public static $container;

    public static function container($container): void
    {
        static::$container = $container;
    }

    public static function getContainer()
    {
        return static::$container;
    }
}