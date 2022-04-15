<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersActive;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class User extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersActive;

    public function me(): object
    {
        return $this->client->get($this->getEndpoint().'/me');
    }

    protected function getEndpoint(): string
    {
        return 'users';
    }
}
