<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait Updateable
{
    public function update(int|string $id, array $data): object
    {
        return $this->client->patch($this->getEndpoint()."/$id", $data);
    }
}
