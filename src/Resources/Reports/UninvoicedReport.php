<?php

namespace BernskioldMedia\Harvest\Resources\Reports;

use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Resources\BaseResource;

class UninvoicedReport extends BaseResource
{
    use FiltersByDates;

    public function get(): object
    {
        return $this->client->get($this->getEndpoint(), $this->query);
    }

    protected function getEndpoint(): string
    {
        return 'reports/uninvoiced';
    }
}
