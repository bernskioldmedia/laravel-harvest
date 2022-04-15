<?php

namespace BernskioldMedia\Harvest\Facades;

use BernskioldMedia\Harvest\Resources\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @see \BernskioldMedia\Harvest\LaravelHarvest
 * @method Client clients
 */
class Harvest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-harvest';
    }
}
