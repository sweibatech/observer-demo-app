<?php

declare(strict_types=1);

namespace ObserverDemoApp\Observers;

use ObserverDemoApp\Interfaces\ObserverInterface;
use ObserverDemoApp\Venue\EventsEnum;
use ObserverDemoApp\Venue\Visitor;

class MailObserver implements ObserverInterface
{
    public function handle(EventsEnum $event, mixed $observable): void {
        if ($event === EventsEnum::VisitorEnteredVenue) {
            /** @var Visitor $visitor */
            $visitor = $observable;
            echo "Mail to visitor: Welcome, " . $visitor?->getName() . "!" . PHP_EOL;
        }
    }
}