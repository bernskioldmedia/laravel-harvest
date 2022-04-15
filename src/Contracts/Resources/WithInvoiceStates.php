<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait WithInvoiceStates
{
    use FiltersState;

    public function draft(): static
    {
        return $this->state('draft');
    }

    public function open(): static
    {
        return $this->state('open');
    }

    public function paid(): static
    {
        return $this->state('paid');
    }

    public function closed(): static
    {
        return $this->state('closed');
    }
}
