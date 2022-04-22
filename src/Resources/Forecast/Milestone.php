<?php

namespace BernskioldMedia\Harvest\Resources\Forecast;

use BernskioldMedia\Harvest\Resources\BaseResource;
use Carbon\Carbon;

class Milestone extends BaseResource
{
    public function between(Carbon $startDate, Carbon $endDate): object
    {
        return $this->client->get($this->getEndpoint(), [
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
        ]);
    }

    protected function getEndpoint(): string
    {
        return 'milestones';
    }
}
