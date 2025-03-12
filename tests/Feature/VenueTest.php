<?php

declare(strict_types=1);

use ObserverDemoApp\Observers\ManagerObserver;
use ObserverDemoApp\Venue\EventsEnum;
use ObserverDemoApp\Venue\Visitor;
use ObserverDemoApp\Venue\VisitorFactory;

describe('Visitor', function () {
    test('can enter venue', function () {
        $visitor = new Visitor('Fake name');
        $visitor->enterVenue();
        expect($visitor->isOnVenue())->toBeTrue();
    });
});

describe('Manager', function () {
    test('notified about new visitor after the visitor entered venue', function () {
        $visitor = VisitorFactory::registerWithName('Fake name');
        $visitor->addObserver(new ManagerObserver);

        $visitor->enterVenue();
        $visitor->notifyObservers(EventsEnum::VisitorEnteredVenue);

        expect($visitor->getManager()->shouldIntroduceToVisitor($visitor))->toBeTrue();
    });
});
