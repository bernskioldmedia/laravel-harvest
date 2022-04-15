<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait Createable
{

    public function create(array $data): object
    {
        return $this->client->post($this->getEndpoint(), $data);
    }

}
