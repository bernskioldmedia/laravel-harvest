<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\RelatesToUser;
use BernskioldMedia\Harvest\Exceptions\InvalidParameters;

class UserCostRate extends BaseResource
{
    use Readable;
    use Createable;

    use RelatesToUser;

    protected function getEndpoint(): string
    {
        if ($this->userId === 0) {
            throw InvalidParameters::relatedModelNotSpecified();
        }

        return "users/$this->userId/cost_rates";
    }
}
