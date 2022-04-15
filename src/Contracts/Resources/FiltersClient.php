<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersClient
{
    public function client(int $clientId): static
    {
        $this->query['client_id'] = $clientId;

        return $this;
    }
}
