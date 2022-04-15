<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersActive;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersBilled;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersProject;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersUser;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class Expense extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;
    use FiltersUser;
    use FiltersClient;
    use FiltersProject;
    use FiltersBilled;
    use FiltersByDates;

    protected function getEndpoint(): string
    {
        return 'expenses';
    }
}
