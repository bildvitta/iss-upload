# This is my package IssImage

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bildvitta/iss-image.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-image)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-image/run-tests?label=tests)](https://github.com/bildvitta/iss-image/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-image/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bildvitta/iss-image/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/bildvitta/iss-image.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-image)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require bildvitta/iss-image
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Bildvitta\IssImage\IssImageServiceProvider" --tag="iss-image-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$iss_image = new Bildvitta\IssImage();
echo $iss_image->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [BILDjean.garcia](https://github.com/SOSTheBlack)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
