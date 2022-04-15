<?php

namespace BernskioldMedia\Harvest\Resources\Reports;

use BernskioldMedia\Harvest\Contracts\Resources\FiltersActive;
use BernskioldMedia\Harvest\Resources\BaseResource;

class ProjectBudgetReport extends BaseResource
{
    use FiltersActive;

    public function get(): object
    {
        return $this->client->get($this->getEndpoint(), $this->query);
    }

    protected function getEndpoint(): string
    {
        return 'reports/project_budget';
    }
}
