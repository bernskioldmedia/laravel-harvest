<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait Deleteable
{
    public function delete(int|string $id): bool
    {
        return $this->client->delete($this->getEndpoint()."/$id");
    }
}
