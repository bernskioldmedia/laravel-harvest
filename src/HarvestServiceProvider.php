<?php

namespace BernskioldMedia\Harvest;

use BernskioldMedia\Harvest\Exceptions\InvalidConfiguration;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HarvestServiceProvider extends PackageServiceProvider
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

        $this->app->bind(Harvest::class, function () {
            $this->protectAgainstInvalidConfiguration(config('harvest'));
            
            $client = app(HarvestClient::class);

            return new Harvest($client);
        });

        $this->app->alias(Harvest::class, 'laravel-harvest');
    }

    protected function protectAgainstInvalidConfiguration(array $config): void
    {
        if (empty($config['account_id'])) {
            throw InvalidConfiguration::noAccountId();
        }

        if (empty($config['application_name'])) {
            throw InvalidConfiguration::noApplicationName();
        }

        if (empty($config['api_key'])) {
            throw InvalidConfiguration::noApiKey();
        }

        if (empty($config['application_email'])) {
            throw InvalidConfiguration::noApplicationEmail();
        }

        if (empty($config['base_url'])) {
            throw InvalidConfiguration::emptyBaseUrl();
        }
    }
}
