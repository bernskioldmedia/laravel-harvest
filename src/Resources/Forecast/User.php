<?php

namespace BernskioldMedia\Harvest\Resources\Forecast;

use BernskioldMedia\Harvest\Resources\BaseResource;

class User extends BaseResource
{

    public function me(): object
    {
        return $this->client->get('whoami');
    }

    public function connections(): object
    {
        return $this->client->get('user_connections');
    }

    public function roles(): object
    {
        return $this->client->get('roles');
    }

    public function ftux_state(): object
    {
        return $this->client->get('ftux_state');
    }

    protected function getEndpoint(): string
    {
        return 'users';
    }
}
