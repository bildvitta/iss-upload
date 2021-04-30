<?php

namespace Bildvitta\IssImage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
        $package->name('iss-image')->hasConfigFile()->hasRoute('api');
    }
}
