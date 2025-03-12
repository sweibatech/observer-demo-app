<?php

declare(strict_types=1);

namespace ObserverDemoApp\Venue;

class VisitorFactory
{
    public static function create(string $name): Visitor
    {
        $visitor = new Visitor($name);
        $visitor->assignManager(ManagerFactory::getAvailableManager());

        return $visitor;
    }
}
