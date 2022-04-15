<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;
use BernskioldMedia\Harvest\Contracts\Resources\WithEstimateStates;

class Estimate extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersClient;
    use FiltersByDates;
    use WithEstimateStates;

    /**
     * Mark a draft estimate as sent.
     */
    public function send(int $estimateId): object
    {
        return $this->client->post($this->getEndpoint()."/$estimateId/messages", [
            'event_type' => 'send',
        ]);
    }

    /**
     * Mark a draft estimate as accepted.
     */
    public function accept(int $estimateId): object
    {
        return $this->client->post($this->getEndpoint()."/$estimateId/messages", [
            'event_type' => 'accept',
        ]);
    }

    /**
     * Mark a draft estimate as declined.
     */
    public function decline(int $estimateId): object
    {
        return $this->client->post($this->getEndpoint()."/$estimateId/messages", [
            'event_type' => 'decline',
        ]);
    }

    /**
     * Marks a closed estimate as open.
     */
    public function reopen(int $estimateId): object
    {
        return $this->client->post($this->getEndpoint()."/$estimateId/messages", [
            'event_type' => 're-open',
        ]);
    }

    protected function getEndpoint(): string
    {
        return 'estimates';
    }
}
