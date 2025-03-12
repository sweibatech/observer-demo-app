<?php

namespace ObserverDemoApp\Interfaces;

interface VisitorInterface
{
    public function getName(): string;

    public function isOnVenue(): bool;
}
