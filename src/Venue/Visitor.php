<?php

declare(strict_types=1);

namespace ObserverDemoApp\Venue;

use ObserverDemoApp\Interfaces\VisitorInterface;
use ObserverDemoApp\Traits\Observable;

class Visitor implements VisitorInterface
{
    use Observable;

    private string $name;

    private bool $isOnVenue = false;

    private Manager $manager;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function assignManager(Manager $manager): void
    {
        $this->manager = $manager;
    }

    public function getManager(): Manager
    {
        return $this->manager;
    }

    public function getName(): string
    {
        return $this->name;
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
