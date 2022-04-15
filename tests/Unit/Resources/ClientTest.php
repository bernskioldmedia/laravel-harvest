<?php

namespace BernskioldMedia\Harvest\Tests\Unit\Resources;

use BernskioldMedia\Harvest\HarvestClient;
use Mockery;
use stdClass;

beforeEach(function () {
    $this->client = Mockery::mock(HarvestClient::class);
    $this->harvest = new \BernskioldMedia\Harvest\Harvest($this->client);
});

it('can build active filtering', function () {
    expect($this->harvest->clients()->active()->query)->toEqual([
        'is_active' => true,
    ]);
});

it('can build inactive filtering', function () {
    expect($this->harvest->clients()->inactive()->query)->toEqual([
        'is_active' => false,
    ]);
});

it('can get all clients', function () {
    $this->client->shouldReceive('get')
        ->withArgs(['clients', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->clients()->all())->toBeObject();
});


it('can get single client', function () {
    $this->client->shouldReceive('get')
        ->withArgs(['clients/1', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->clients()->get(1))->toBeObject();
});

it('can create client', function () {
    $this->client->shouldReceive('post')
        ->withArgs([
            'clients', [
                'name' => 'Test',
            ],
        ])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->clients()->create(['name' => 'Test']))->toBeObject();
});

it('can update client', function () {
    $this->client->shouldReceive('patch')
        ->withArgs(['clients/1', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->harvest->clients()->update(1, []))->toBeObject();
});

it('can delete client', function () {
    $this->client->shouldReceive('delete')
        ->withArgs(['clients/1'])
        ->once()
        ->andReturn(true);

    expect($this->harvest->clients()->delete(1))->toBeTrue();
});
