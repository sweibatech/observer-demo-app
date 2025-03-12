<?php

declare(strict_types=1);

namespace ObserverDemoApp\Observers;

use ObserverDemoApp\Interfaces\ObserverInterface;
use ObserverDemoApp\Venue\EventsEnum;
use ObserverDemoApp\Venue\Visitor;

class ManagerObserver implements ObserverInterface
{
    public function handle(EventsEnum $event, mixed $observable): void
    {
        match ($event) {
            EventsEnum::VisitorEnteredVenue => $this->notifyManager($observable)
        };
    }

    private function notifyManager(Visitor $visitor): void
    {

        echo 'Message for '.$visitor->getManager()->getName()
            .': new visitor '.$visitor->getName().' entered the venue'
            .PHP_EOL;

        $visitor->getManager()->addVisitorToWorkList($visitor);
    }
}
