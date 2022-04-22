<?php

namespace BernskioldMedia\Harvest\Resources\Forecast;

use BernskioldMedia\Harvest\Resources\BaseResource;

class Clients extends BaseResource
{

    public function all(): object
    {
        return $this->client->get($this->getEndpoint());
    }

    protected function getEndpoint(): string
    {
        return 'clients';
    }
}
