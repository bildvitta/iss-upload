# This is my package IssUpload

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bildvitta/iss-upload.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-upload)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-upload/run-tests?label=tests)](https://github.com/bildvitta/iss-upload/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-upload/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bildvitta/iss-upload/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/bildvitta/iss-upload.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-upload)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require bildvitta/iss-upload
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Bildvitta\IssUpload\IssUploadServiceProvider" --tag="iss-upload-config"
```

This is the contents of the published config file:

```php
return [

    'validation' => [
        'mine_type' => env('ISS_IMAGE_VALID_MINE_TYPE', 'image/jpeg,image/gif,image/bmp,image/tiff,image/png,application/pdf'),
    ],

    'route' => [

        'prefix' => env('ISS_IMAGE_ROUTE_PREFIX', 'api'),

        'middleware' => env('ISS_IMAGE_ROUTE_MIDDLEWARE', 'hub.auth'),

    ]

];

```

If you want to change any settings, do so through your .env file.

```dotenv
ISS_IMAGE_ROUTE_PREFIX=api
ISS_IMAGE_ROUTE_MIDDLEWARE="hub.auth"
ISS_IMAGE_VALID_MINE_TYPE="image/jpeg,image/gif,image/bmp,image/tiff,image/png,application/pdf"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
```

It is mandatory to fill in AWS credential information.

## Usage

The package already contains a 'prefix / upload-credentials' and 'prefix / upload' route by default.

Below is an example in cURL requesting the upload link to AWS.

````
curl --location --request POST 'http://127.0.0.1:8001/api/upload-credentials' \
--header 'Content-Type: application/json' \
--data-raw '{
    "filename": "5044e35d-8cc1-4cf3-b9e6-358872f022ac.png",
    "entity": "realEstateDevelopmentsMedias"
}'
````

Here is an example of an answer.

````json
{
  "path": "uploads/realEstateDevelopmentsMedias/5044e35d-8cc1-4cf3-b9e6-358872f022ac.png",
  "full_path": "https://s3.amazonaws.com/bucket.com.br/uploads/realEstateDevelopmentsMedias/5044e35d-8cc1-4cf3-b9e6-358872f022ac.png",
  "endpoint": "https://s3.amazonaws.com/bucket.com.br/uploads/realEstateDevelopmentsMedias/5044e35d-8cc1-4cf3-b9e6-358872f022ac.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=XXXXXFus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20210430T111315Z&X-Amz-SignedHeaders=host&X-Amz-Expires=600&X-Amz-Signature=XXXX"
}
````

#### Custom routes

You may also want to have your own upload routes, one for each form for example

````php
use Bildvitta\IssUpload\Http\Controllers\UploadController;

Route::post('/upload-pdf')->name('upload_pdf')->uses(UploadController::class);
````

#### Using run time

It may also happen that you want to have the upload source at any time in the request time.

For any purpose you can use the code below which will have an array with the same content as the controller response

Feel free to use `\Bildvitta\IssUpload\Http\Requests\UploadRequest`.

```php
use Bildvitta\IssUpload\Http\Requests\UploadRequest;
use Bildvitta\IssUpload\IssUpload;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\YourRequestValidator;

class NewPostController extends Controller
{
    public function __invoke(YourRequestValidator $yourRequestValidator, UploadRequest $uploadRequest): JsonResponse
    {
        #TODO: Your Logic.
        
//        $issUpload = new IssUpload($uploadRequest->entity, ($uploadRequest->filename, $uploadRequest->mine_type);
        
        $issUpload = new IssUpload();
        $issUpload->setEntity($uploadRequest->entity);
        $issUpload->setFilename($uploadRequest->filename);
        $issUpload->setMineType($uploadRequest->mine_type);

        dd($issUpload->getUploadSource());
        
        #TODO: Your Logic.
    }
}
```

The dump returns something like this.

````
array:3 [
  "path": "uploads/realEstateDevelopmentsMedias/5044e35d-8cc1-4cf3-b9e6-358872f022ac.png",
  "full_path": "https://s3.amazonaws.com/bucket.com.br/uploads/realEstateDevelopmentsMedias/5044e35d-8cc1-4cf3-b9e6-358872f022ac.png",
  "endpoint": "https://s3.amazonaws.com/bucket.com.br/uploads/realEstateDevelopmentsMedias/5044e35d-8cc1-4cf3-b9e6-358872f022ac.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=XXXXXFus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20210430T111315Z&X-Amz-SignedHeaders=host&X-Amz-Expires=600&X-Amz-Signature=XXXX"
]
````

## Testing

coming soon...

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SOSTheBLack](https://github.com/SOSTheBlack)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
