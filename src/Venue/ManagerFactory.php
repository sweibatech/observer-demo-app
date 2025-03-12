<?php

declare(strict_types=1);

namespace ObserverDemoApp\Venue;

class ManagerFactory
{
    public static function getAvailableManager(): Manager
    {
        return static::getRandomManager();
    }

    protected static function getRandomManager(): Manager
    {
        $managers = [
            'Manager A',
            'Manager B',
            'Manager C',
        ];
        $randKey = array_rand($managers);
        $manager = new Manager;
        $manager->setName($managers[$randKey]);

        return $manager;
    }
}
