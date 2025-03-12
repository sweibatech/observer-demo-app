<?php

declare(strict_types=1);

namespace ObserverDemoApp\Traits;

trait WithName
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
