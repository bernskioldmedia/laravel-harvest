<?php

namespace BernskioldMedia\Harvest\Tests\Integration;

use BernskioldMedia\Harvest\Exceptions\InvalidConfiguration;
use BernskioldMedia\Harvest\Facades\Harvest;

it('will throw an exception if the account id is not set', function () {
    $this->app['config']->set('harvest.account_id', '');
    Harvest::contacts()->all();
})->expectException(InvalidConfiguration::class);

it('will throw an exception if the application name is not set', function () {
    $this->app['config']->set('harvest.application_name', '');
    Harvest::contacts()->all();
})->expectException(InvalidConfiguration::class);

it('will throw an exception if the application email is not set', function () {
    $this->app['config']->set('harvest.application_email', '');
    Harvest::contacts()->all();
})->expectException(InvalidConfiguration::class);

it('will throw an exception if the API Key is not set', function () {
    $this->app['config']->set('harvest.api_key', '');
    Harvest::contacts()->all();
})->expectException(InvalidConfiguration::class);

it('will throw an exception if the base url is not set', function () {
    $this->app['config']->set('harvest.base_url', '');
    Harvest::contacts()->all();
})->expectException(InvalidConfiguration::class);
