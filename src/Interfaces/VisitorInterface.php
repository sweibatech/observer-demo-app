<?php

namespace ObserverDemoApp\Interfaces;

interface VisitorInterface
{
    public function isOnVenue(): bool;

    public function enterVenue(): void;
}
