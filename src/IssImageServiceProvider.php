<?php

namespace Bildvitta\IssImage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bildvitta\IssImage\Commands\IssImageCommand;

/**
 * Class IssImageServiceProvider.
 *
 * @package Bildvitta\IssImage
 */
class IssImageServiceProvider extends PackageServiceProvider
{
    /**
     * @param  Package  $package
     */
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('iss-image')
            ->hasConfigFile();
//            ->hasViews()
//            ->hasMigration('create_iss-image_table')
//            ->hasCommand(IssImageCommand::class);
    }
}
