<?php

declare(strict_types=1);
namespace ObserverDemoApp\Traits;
use ObserverDemoApp\Interfaces\ObserverInterface;
use ObserverDemoApp\Venue\EventsEnum;

trait Observable
{
    private array $observers = [];

    public function addObserver(ObserverInterface $observer): void {
        $this->observers[] = $observer;
    }

    public function notifyObservers(EventsEnum $event): void
    {
        foreach ($this->observers as $observer) {
            $observer->handle($event, $this);
        }
    }
}