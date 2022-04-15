<?php

namespace BernskioldMedia\Harvest\Tests\Unit;

use BernskioldMedia\Harvest\HarvestClient;

it('can build request', function () {
    $client = new HarvestClient(123, 'token', 'My App <info@example.com>', 'https://example.com');

    expect($client->request->getOptions()['headers']['Harvest-Account-ID'])->toBe('123');
    expect($client->request->getOptions()['headers']['Authorization'])->toBe('Bearer token');
    expect($client->request->getOptions()['headers']['User-Agent'])->toBe('My App <info@example.com>');
});
