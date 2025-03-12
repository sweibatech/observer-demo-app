<?php

declare(strict_types=1);
require __DIR__.'/vendor/autoload.php';

use ObserverDemoApp\Observers\MailObserver;
use ObserverDemoApp\Observers\ManagerObserver;
use ObserverDemoApp\Venue\EventsEnum;
use ObserverDemoApp\Venue\VisitorFactory;

$visitor = VisitorFactory::create('John Doe');

$visitor->addObserver(new ManagerObserver);
$visitor->addObserver(new MailObserver);

$visitor->enterVenue();

$visitor->notifyObservers(EventsEnum::VisitorEnteredVenue);
