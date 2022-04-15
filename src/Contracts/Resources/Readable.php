<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait Readable
{
    protected array $query = [];

    public function all(): object
    {
        return $this->client->get($this->getEndpoint(), $this->query);
    }

    public function get(string|int $id): object
    {
        return $this->client->get($this->getEndpoint().'/'.$id, $this->query);
    }
}
