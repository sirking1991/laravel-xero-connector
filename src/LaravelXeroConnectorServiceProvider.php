<?php

namespace Sirking1991\LaravelXeroConnector;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sirking1991\LaravelXeroConnector\Commands\LaravelXeroConnectorCommand;

class LaravelXeroConnectorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-xero-connector')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-xero-connector_table')
            ->hasCommand(LaravelXeroConnectorCommand::class);
    }
}
