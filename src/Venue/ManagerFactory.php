<?php
declare(strict_types=1);
namespace ObserverDemoApp\Venue;

class ManagerFactory
{
    public static function getAvailableManager(): Manager
    {
        return static::getRandomManager();
    }

    protected static function getRandomManager(): Manager {
        $managers = [
            "A",
            "B",
            "C"
        ];
        $randKey = array_rand($managers);
        return new Manager($managers[$randKey]);
    }
}