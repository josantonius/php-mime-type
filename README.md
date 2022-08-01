# PHP MimeType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/mime-type/v/stable)](https://packagist.org/packages/josantonius/mime-type)
[![License](https://poser.pugx.org/josantonius/mime-type/license)](LICENSE)
[![Total Downloads](https://poser.pugx.org/josantonius/mime-type/downloads)](https://packagist.org/packages/josantonius/mime-type)
[![CI](https://github.com/josantonius/php-mime-type/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/josantonius/php-mime-type/actions/workflows/ci.yml)
[![CodeCov](https://codecov.io/gh/josantonius/php-mime-type/branch/main/graph/badge.svg)](https://codecov.io/gh/josantonius/php-mime-type)
[![PSR1](https://img.shields.io/badge/PSR-1-f57046.svg)](https://www.php-fig.org/psr/psr-1/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](https://www.php-fig.org/psr/psr-4/)
[![PSR12](https://img.shields.io/badge/PSR-12-1abc9c.svg)](https://www.php-fig.org/psr/psr-12/)

**Translations**: [Español](.github/lang/es-ES/README.md)

PHP library to get MIME types from extensions.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#todo)
- [Changelog](#changelog)
- [Contribution](#contribution)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is compatible with the PHP versions: 8.0 | 8.1.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP MimeType library**, simply:

```console
composer require josantonius/mime-type
```

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

```console
composer require josantonius/mime-type --prefer-source
```

You can also **clone the complete repository** with Git:

```console
git clone https://github.com/josantonius/php-mime-type.git
```

## Available Methods

Available methods in this library:

### Get array with all MIME types

```php
$mimeType->getAll(): array
```

### Get file extension from MIME type

```php
$mimeType->getExtension(string $mimeType): string|null
```

### Get MIME type from file extension

```php
$mimeType->getMime($extension): string|null
```

## Quick Start

To use this library:

### Using Objects

```php
use Josantonius\MimeType\MimeType;

$mimeType = new MimeType();
```

### Using Static Collection

Alternatively you can use the collection to access the methods statically:

```php
use Josantonius\MimeType\MimeTypeCollection;
```

## Usage

Example of use for this library:

### - Get array with all MIME types

[Using objects](#using-objects):

```php
$mimeType->getAll();
```

[Using the static collection](#using-static-collection):

```php
MimeTypeCollection::getAll();
```

Result:

```php
[
    [".123"]=> "application/vnd.lotus-1-2-3"
    [".3dml"]=> "text/vnd.in3d.3dml"
    [".3g2"]=> "video/3gpp2"
    [".3gp"]=> "video/3gpp"
    [".7z"]=> "application/x-7z-compressed"
    [".aab"]=> "application/x-authorware-bin"
    [".aac"]=> "audio/x-aac"
    [".aam"]=> "application/x-authorware-map"
    [".aas"]=> "application/x-authorware-seg"
    [".abw"]=> "application/x-abiword"
    (...)
]
```

### - Get file extension from MIME type

[Using objects](#using-objects):

```php
$mimeType->getExtension('text/html'); // .html
```

[Using the static collection](#using-static-collection):

```php
MimeTypeCollection::getExtension('application/zip'); // .zip
```

### - Get MIME type from file extension

[Using objects](#using-objects):

```php
$mimeType->getMime('.tar'); // application/x-tar
```

The dot can be omitted:

```php
$mimeType->getMime('mp4'); // video/mp4
```

[Using the static collection](#using-static-collection):

```php
MimeTypeCollection::getMime('.json'); // application/json
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/)
and to execute the following:

```console
git clone https://github.com/josantonius/php-mime-type.git
```

```console
cd PHP-MimeType
```

```console
composer install
```

Run unit tests with [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Run code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

```console
composer phpmd
```

Run all previous tests:

```console
composer tests
```

## TODO

- [ ] Add new feature
- [ ] Improve tests
- [ ] Improve documentation
- [ ] Improve English translation in the README file
- [ ] Refactor code for disabled code style rules (see phpmd.xml and phpcs.xml)

## Changelog

Detailed changes for each release are documented in the
[release notes](https://github.com/josantonius/php-mime-type/releases).

## Contribution

Please make sure to read the [Contributing Guide](.github/CONTRIBUTING.md), before making a pull
request, start a discussion or report a issue.

Thanks to all [contributors](https://github.com/josantonius/php-mime-type/graphs/contributors)! :heart:

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2016-present, [Josantonius](https://github.com/josantonius#contact)
