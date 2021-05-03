<?php

namespace Bildvitta\IssUpload;

use Bildvitta\IssUpload\Http\Requests\UploadRequest;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * Class IssUploadServiceProvider.
 *
 * @package Bildvitta\IssUpload
 */
class IssUploadServiceProvider extends PackageServiceProvider
{
    /**
     * @return void
     */
    public function packageRegistered(): void
    {
        $uploadRequest = new UploadRequest(request()->all());
        $this->app->singleton(IssUploadContract::class, fn() => new IssUpload($uploadRequest->entity, $uploadRequest->filename, $uploadRequest->mine_type));
    }

    /**
     * @param  Package  $package
     */
    public function configurePackage(Package $package): void
    {
        $package->name('iss-upload')->hasConfigFile()->hasRoute('api');
    }
}
