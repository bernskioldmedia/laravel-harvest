<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersActive;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersUser;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\RelatesToProject;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;
use BernskioldMedia\Harvest\Exceptions\InvalidParameters;

class ProjectUserAssignment extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use RelatesToProject;
    use FiltersActive;
    use FiltersUser;

    public function all(): object
    {
        return $this->client->get('user_assignments', $this->query);
    }

    public function allForProject(): object
    {
        return $this->client->get($this->getEndpoint(), $this->query);
    }

    protected function getEndpoint(): string
    {
        if ($this->projectId === 0) {
            throw InvalidParameters::relatedModelNotSpecified();
        }

        return "projects/$this->projectId/user_assignments";
    }
}
