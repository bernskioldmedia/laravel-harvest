<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersProject
{

    public function project(int $projectId): static
    {
        $this->query['project_id'] = $projectId;

        return $this;
    }

}
