<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersBilled;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersByExternalReference;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersProject;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersRunning;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersTask;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersUser;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class TimeEntry extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersUser;
    use FiltersClient;
    use FiltersProject;
    use FiltersTask;
    use FiltersByExternalReference;
    use FiltersBilled;
    use FiltersRunning;
    use FiltersByDates;

    protected function getEndpoint(): string
    {
        return 'time_entries';
    }
}
