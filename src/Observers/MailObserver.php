<?php

declare(strict_types=1);

namespace ObserverDemoApp\Observers;

use ObserverDemoApp\Interfaces\ObserverInterface;
use ObserverDemoApp\Venue\EventsEnum;
use ObserverDemoApp\Venue\Visitor;

class MailObserver implements ObserverInterface
{
    public function handle(EventsEnum $event, mixed $observable): void
    {
        match ($event) {
            EventsEnum::VisitorEnteredVenue => $this->notifyVisitor($observable)
        };
    }

    public function notifyVisitor(Visitor $visitor): void
    {
        echo 'Mail to visitor: Welcome, '.$visitor->getName()
            .'! Your personal manager is: '.$visitor->getManager()->getName().PHP_EOL;
    }
}
