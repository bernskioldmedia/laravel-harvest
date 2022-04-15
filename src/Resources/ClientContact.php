<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class ClientContact extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersClient;

    protected function getEndpoint(): string
    {
        return 'contacts';
    }
}
