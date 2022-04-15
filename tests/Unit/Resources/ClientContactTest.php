<?php

namespace BernskioldMedia\Harvest\Tests\Unit\Resources;

use BernskioldMedia\Harvest\HarvestClient;
use Mockery;
use stdClass;

beforeEach(function () {
    $this->client = Mockery::mock(HarvestClient::class);
    $this->harvest = new \BernskioldMedia\Harvest\Harvest($this->client);
});

it('can build client filtering', function () {
    expect($this->harvest->contacts()->client(1)->query)->toEqual([
        'client_id' => 1,
    ]);
});

it('can get all contacts', function () {
    $this->client->shouldReceive('get')
        ->withArgs(['contacts', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->contacts()->all())->toBeObject();
});


it('can get single contact', function () {
    $this->client->shouldReceive('get')
        ->withArgs(['contacts/1', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->contacts()->get(1))->toBeObject();
});

it('can create contact', function () {
    $this->client->shouldReceive('post')
        ->withArgs([
            'contacts', [
                'name' => 'Test',
            ],
        ])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->contacts()->create(['name' => 'Test']))->toBeObject();
});

it('can update contact', function () {
    $this->client->shouldReceive('patch')
        ->withArgs(['contacts/1', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->contacts()->update(1, []))->toBeObject();
});

it('can delete contact', function () {
    $this->client->shouldReceive('delete')
        ->withArgs(['contacts/1'])
        ->once()
        ->andReturn(true);

    expect($this->harvest->contacts()->delete(1))->toBeTrue();
});
