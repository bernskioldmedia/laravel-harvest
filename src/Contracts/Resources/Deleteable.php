<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait Deleteable
{

    public function delete(int|string $id): object
    {
        return $this->client->delete($this->getEndpoint()."/$id");
    }

}
