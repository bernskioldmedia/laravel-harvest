<?php

namespace BernskioldMedia\Harvest\Tests\Unit;

use BernskioldMedia\Harvest\Facades\Harvest;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use stdClass;

it('can build request from config values', function () {

    Http::fake([
        '*' => Http::response(json_encode(new stdClass())),
    ]);

    $this->app['config']->set('harvest.account_id', '123');
    $this->app['config']->set('harvest.api_key', 'token');
    $this->app['config']->set('harvest.application_name', 'My App');
    $this->app['config']->set('harvest.application_email', 'info@example.com');

    Harvest::clients()->all();

    Http::assertSent(function (Request $request) {
        return $request->hasHeaders([
            'Harvest-Account-ID' => '123',
            'Authorization' => 'Bearer token',
            'User-Agent' => 'My App <info@example.com>',
        ]);
    });
});
