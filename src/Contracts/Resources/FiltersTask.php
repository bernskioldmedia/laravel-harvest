<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersTask
{

    public function task(int $taskId): static
    {
        $this->query['task_id'] = $taskId;

        return $this;
    }

}
