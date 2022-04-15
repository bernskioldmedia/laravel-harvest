<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\RelatesToUser;
use BernskioldMedia\Harvest\Exceptions\InvalidParameters;

class UserProjectAssignment extends BaseResource
{
    use Readable;

    use RelatesToUser;

    public function mine(): object
    {
        return $this->client->get('users/me/project_assignments');
    }

    protected function getEndpoint(): string
    {
        if ($this->userId === 0) {
            throw InvalidParameters::relatedModelNotSpecified();
        }

        return "users/$this->userId/project_assignments";
    }
}
