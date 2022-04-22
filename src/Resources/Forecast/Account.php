<?php

namespace BernskioldMedia\Harvest\Resources\Forecast;

use BernskioldMedia\Harvest\Resources\BaseResource;

class Account extends BaseResource
{

    public function get(string|int $id): object
    {
        return $this->client->get($this->getEndpoint().'/'.$id, $this->query);
    }

    protected function getEndpoint(): string
    {
        return 'accounts';
    }
}
