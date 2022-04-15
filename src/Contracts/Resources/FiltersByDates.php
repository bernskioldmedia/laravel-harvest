<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

use Illuminate\Support\Carbon;

trait FiltersByDates
{
    public function from(Carbon $date): static
    {
        $this->query['from'] = $date->toIso8601ZuluString();

        return $this;
    }

    public function to(Carbon $date): static
    {
        $this->query['to'] = $date->toIso8601ZuluString();

        return $this;
    }
}
