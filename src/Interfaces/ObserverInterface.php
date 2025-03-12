<?php

namespace ObserverDemoApp\Interfaces;

use ObserverDemoApp\Venue\EventsEnum;

interface ObserverInterface
{
    public function handle(EventsEnum $event, mixed $observable): void;
}