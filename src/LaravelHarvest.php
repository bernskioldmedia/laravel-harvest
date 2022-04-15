<?php

namespace BernskioldMedia\Harvest;

use BernskioldMedia\Harvest\Resources\Client;

class LaravelHarvest
{

    public function __construct(
        protected HarvestClient $client,
    ) {
    }

    public function clients(): Client
    {
        return (new Client($this->client));
    }

}
