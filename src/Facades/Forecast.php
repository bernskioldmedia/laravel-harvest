<?php

namespace BernskioldMedia\Harvest\Facades;

use BernskioldMedia\Harvest\Resources\Forecast\Account;
use BernskioldMedia\Harvest\Resources\Forecast\Assignment;
use BernskioldMedia\Harvest\Resources\Forecast\Client;
use BernskioldMedia\Harvest\Resources\Forecast\Milestone;
use BernskioldMedia\Harvest\Resources\Forecast\Person;
use BernskioldMedia\Harvest\Resources\Forecast\Project;
use BernskioldMedia\Harvest\Resources\Forecast\User;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Account accounts()
 * @method static Assignment assignments()
 * @method static Client clients()
 * @method static Milestone milestones()
 * @method static Person people()
 * @method static Project projects()
 * @method static User users()
 *
 * @see \BernskioldMedia\Harvest\Forecast
 */
class Forecast extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-forecast';
    }
}
