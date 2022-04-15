<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\FiltersUpdatedSince;
use BernskioldMedia\Harvest\Contracts\Resources\HasPagination;
use BernskioldMedia\Harvest\HarvestClient;

abstract class BaseResource
{
    use FiltersUpdatedSince;
    use HasPagination;

    protected string $endpoint;

    public function __construct(
        protected HarvestClient $client
    ) {
    }

    abstract protected function getEndpoint(): string;

}
