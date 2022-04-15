<?php

namespace BernskioldMedia\Harvest\Tests\Unit;

use BernskioldMedia\Harvest\HarvestClient;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

it('can build request', function () {
    Http::fake();

    $client = new HarvestClient(123, 'token', 'My App <info@example.com>', 'https://example.com');

    $client->request->get('/');

    Http::assertSent(function (Request $request) {
        return $request->hasHeaders([
            'Harvest-Account-ID' => '123',
            'Authorization' => 'Bearer token',
            'User-Agent' => 'My App <info@example.com>',
        ]);
    });
});
