<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait RelatesToProject
{

    public int $projectId = 0;

    public function project(int $projectId): static
    {
        $this->projectId = $projectId;

        return $this;
    }

}
