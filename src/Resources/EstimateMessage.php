<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\RelatesToEstimate;
use BernskioldMedia\Harvest\Exceptions\InvalidParameters;

class EstimateMessage extends BaseResource
{
    use Readable;
    use Createable;
    use Deleteable;

    use RelatesToEstimate;

    protected function getEndpoint(): string
    {
        if ($this->estimateId === 0) {
            throw InvalidParameters::relatedModelNotSpecified();
        }

        return "estimates/$this->estimateId/messages";
    }
}
