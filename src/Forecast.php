<?php

namespace BernskioldMedia\Harvest;

use BernskioldMedia\Harvest\Resources\Forecast\Account;
use BernskioldMedia\Harvest\Resources\Forecast\Assignment;
use BernskioldMedia\Harvest\Resources\Forecast\Client;
use BernskioldMedia\Harvest\Resources\Forecast\Milestone;

class Forecast
{
    public function __construct(
        public ForecastClient $client,
    ) {
    }

    public function accounts(): Account
    {
        return new Account($this->client);
    }

    public function assignments(): Assignment
    {
        return new Assignment($this->client);
    }

    public function clients(): Client
    {
        return new Client($this->client);
    }

    public function milestones(): Milestone
    {
        return new Milestone($this->client);
    }

}
