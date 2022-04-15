<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersActive
{

    public function active(bool $active = true): static
    {
        $this->query['is_active'] = $active;

        return $this;
    }

    public function inactive(): static
    {
        $this->query['is_active'] = false;

        return $this;
    }

}
