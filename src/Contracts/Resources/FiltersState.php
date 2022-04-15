<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersState
{
    public function state(string $state): static
    {
        $this->query['state'] = $state;

        return $this;
    }
}
