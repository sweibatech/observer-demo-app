<?php

declare(strict_types=1);

namespace ObserverDemoApp\Venue;

use ObserverDemoApp\Interfaces\VisitorInterface;
use ObserverDemoApp\Traits\WithName;

class Manager
{
    use WithName;

    /**
     * @var array<VisitorInterface>
     */
    protected array $visitorsWorklist = [];

    public function addVisitorToWorkList(VisitorInterface $visitor): void
    {
        $this->visitorsWorklist[] = $visitor;
    }

    public function shouldIntroduceToVisitor(VisitorInterface $visitor): bool
    {
        return in_array($visitor, $this->visitorsWorklist, true);
    }
}
