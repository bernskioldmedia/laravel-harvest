<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersActive;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\RelatesToProject;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;
use BernskioldMedia\Harvest\Exceptions\InvalidParameters;

class ProjectTaskAssignment extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use RelatesToProject;
    use FiltersActive;

    public function all(): object
    {
        return $this->client->get('task_assignments', $this->query);
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

        return "projects/$this->projectId/task_assignments";
    }
}
