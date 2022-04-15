<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

use Illuminate\Support\Carbon;

trait FiltersUpdatedSince
{

    public function updatedSince(string|Carbon $date): static
    {
        if (!$date instanceof Carbon) {
            $date = Carbon::make($date);
        }

        $this->query['updated_since'] = $date->toIso8601ZuluString();

        return $this;
    }

}
