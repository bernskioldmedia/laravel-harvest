<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class Company extends BaseResource
{
    use Updateable;

    public array $query = [];

    public function get(): object
    {
        return $this->client->get($this->getEndpoint(), $this->query);
    }

    protected function getEndpoint(): string
    {
        return 'contacts';
    }
}
