<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\FiltersUpdatedSince;
use BernskioldMedia\Harvest\Contracts\Resources\HasPagination;
use BernskioldMedia\Harvest\HarvestClient;

abstract class BaseResource
{
    use FiltersUpdatedSince;
    use HasPagination;

    public array $query = [];
    protected string $endpoint;

    public function __construct(
        public HarvestClient $client
    ) {
    }

    abstract protected function getEndpoint(): string;
}
