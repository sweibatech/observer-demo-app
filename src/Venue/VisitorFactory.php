<?php

declare(strict_types=1);

namespace ObserverDemoApp\Venue;

class VisitorFactory
{
    public static function registerWithName(string $name): Visitor
    {
        $visitor = new Visitor;
        $visitor->setName($name);
        $visitor->assignManager(ManagerFactory::getAvailableManager());

        return $visitor;
    }
}
