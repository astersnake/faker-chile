<?php

namespace Astersnake\FakerChile;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Astersnake\FakerChile\Commands\FakerChileCommand;

class FakerChileServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('faker-chile')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_faker-chile_table')
            ->hasCommand(FakerChileCommand::class);
    }
}
