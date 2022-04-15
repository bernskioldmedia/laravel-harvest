<?php

namespace BernskioldMedia\Harvest\Tests\Unit;

use BernskioldMedia\Harvest\Facades\Harvest;

it('can build request from config values', function () {
    $this->app['config']->set('harvest.account_id', '123');
    $this->app['config']->set('harvest.api_key', 'token');
    $this->app['config']->set('harvest.application_name', 'My App');
    $this->app['config']->set('harvest.application_email', 'info@example.com');

    $request = Harvest::contacts()->client->request;

    expect($request->getOptions()['headers']['Harvest-Account-ID'])->toBe('123');
    expect($request->getOptions()['headers']['Authorization'])->toBe('Bearer token');
    expect($request->getOptions()['headers']['User-Agent'])->toBe('My App <info@example.com>');
});
