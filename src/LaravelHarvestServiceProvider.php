<?php

namespace BernskioldMedia\Harvest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHarvestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-harvest')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind(HarvestClient::class, function () {
            return HarvestClient::fromConfig(config('harvest'));
        });

        $this->app->bind(LaravelHarvest::class, function () {
            $client = app(HarvestClient::class);

            return new LaravelHarvest($client);
        });

        $this->app->alias(LaravelHarvest::class, 'laravel-harvest');
    }
}
