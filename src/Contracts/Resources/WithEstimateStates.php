<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait WithEstimateStates
{
    use FiltersState;

    public function draft(): static
    {
        return $this->state('draft');
    }

    public function sent(): static
    {
        return $this->state('sent');
    }

    public function accepted(): static
    {
        return $this->state('accepted');
    }

    public function declined(): static
    {
        return $this->state('declined');
    }
}
