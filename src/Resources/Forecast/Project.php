<?php

namespace BernskioldMedia\Harvest\Resources\Forecast;

use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Resources\BaseResource;

class Project extends BaseResource
{
    use Readable;

    protected function getEndpoint(): string
    {
        return 'projects';
    }
}
