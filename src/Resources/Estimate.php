<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;
use BernskioldMedia\Harvest\Contracts\Resources\WithEstimateStates;

class Estimate extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersClient;
    use FiltersByDates;
    use WithEstimateStates;

    protected function getEndpoint(): string
    {
        return 'estimates';
    }
}
