<?php

declare(strict_types=1);

namespace ObserverDemoApp\Venue;

use ObserverDemoApp\Interfaces\VisitorInterface;
use ObserverDemoApp\Traits\Observable;
use ObserverDemoApp\Traits\WithName;

class Visitor implements VisitorInterface
{
    use Observable, WithName;

    private bool $isOnVenue = false;

    private Manager $manager;

    public function assignManager(Manager $manager): void
    {
        $this->manager = $manager;
    }

    public function getManager(): Manager
    {
        return $this->manager;
    }

    public function isOnVenue(): bool
    {
        return $this->isOnVenue;
    }

    public function enterVenue(): void
    {
        $this->isOnVenue = true;
    }
}
