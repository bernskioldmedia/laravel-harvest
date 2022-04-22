<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\ApiClient;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersUpdatedSince;
use BernskioldMedia\Harvest\Contracts\Resources\HasPagination;

abstract class BaseResource
{
    use FiltersUpdatedSince;
    use HasPagination;

    public array $query = [];
    protected string $endpoint;

    public function __construct(
        public ApiClient $client
    ) {
    }

    abstract protected function getEndpoint(): string;
}
