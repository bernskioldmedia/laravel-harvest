<?php

namespace BernskioldMedia\Harvest\Resources\Forecast;

use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Resources\BaseResource;

class Person extends BaseResource
{
    use Readable;

    protected function getEndpoint(): string
    {
        return 'people';
    }
}
