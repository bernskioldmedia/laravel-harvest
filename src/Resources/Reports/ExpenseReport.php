<?php

namespace BernskioldMedia\Harvest\Resources\Reports;

use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Resources\BaseResource;

class ExpenseReport extends BaseResource
{
    use FiltersByDates;

    public function clients(): object
    {
        return $this->client->get($this->getEndpoint().'/clients', $this->query);
    }

    public function projects(): object
    {
        return $this->client->get($this->getEndpoint().'/projects', $this->query);
    }

    public function expenseCategories(): object
    {
        return $this->client->get($this->getEndpoint().'/categories', $this->query);
    }

    public function team(): object
    {
        return $this->client->get($this->getEndpoint().'/team', $this->query);
    }

    protected function getEndpoint(): string
    {
        return 'reports/expenses';
    }
}
