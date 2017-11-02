# PHP MimeType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/MimeType/v/stable)](https://packagist.org/packages/josantonius/MimeType) [![Latest Unstable Version](https://poser.pugx.org/josantonius/MimeType/v/unstable)](https://packagist.org/packages/josantonius/MimeType) [![License](https://poser.pugx.org/josantonius/MimeType/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/e4aa9b3dba374408ab1d35eca147ca50)](https://www.codacy.com/app/Josantonius/PHP-MimeType?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-MimeType&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/MimeType/downloads)](https://packagist.org/packages/josantonius/MimeType) [![Travis](https://travis-ci.org/Josantonius/PHP-MimeType.svg)](https://travis-ci.org/Josantonius/PHP-MimeType) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-MimeType/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-MimeType)

[Versión en español](README-ES.md)

PHP library for obtain headers MIME.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP MimeType library**, simply:

    $ composer require Josantonius/MimeType

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/MimeType --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-MimeType.git

Or **install it manually**:

[Download MimeType.php](https://raw.githubusercontent.com/Josantonius/PHP-MimeType/master/src/MimeType.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-MimeType/master/src/MimeType.php

## Available Methods

Available methods in this library:

### - Get array with all MIME types:

```php
MimeType::get();
```

**# Return** (void)

### - Get MIME type from file extension:

```php
MimeType::getMimeFromExtension($ext);
```

| Attribute | Description | Type | Required
| --- | --- | --- | --- |
| $ext | File extension. | string | Yes |

**# Return** (string|false) → MIME type or false

### - Get file extension from MIME type:

```php
MimeType::getExtensionFromMime($mime);
```

| Attribute | Description | Type | Required
| --- | --- | --- | --- |
| $mime | MIME type. | string | Yes |

**# Return** (string|false) → File extension or false.

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\MimeType\MimeType;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/MimeType.php';

use Josantonius\MimeType\MimeType;
```

## Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\MimeType\MimeType;

echo MimeType::getMimeFromExtension('.json'); // application/json

echo MimeType::getExtensionFromMime('text/html'); // .html

var_dump(MimeType::get());

/*
array(682) {
  [".123"]=>
  string(27) "application/vnd.lotus-1-2-3"
  [".3dml"]=>
  string(18) "text/vnd.in3d.3dml"
  [".3g2"]=>
  string(11) "video/3gpp2"
  [".3gp"]=>
  string(10) "video/3gpp"
  [".7z"]=>
  string(27) "application/x-7z-compressed"
  [".aab"]=>
  string(28) "application/x-authorware-bin"
  [".aac"]=>
  string(11) "audio/x-aac"
  [".aam"]=>
  string(28) "application/x-authorware-map"
  [".aas"]=>
  string(28) "application/x-authorware-seg"
  [".abw"]=>
  string(21) "application/x-abiword"
(...)
*/
```

## Tests 

To run [tests](tests) you just need [Composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-MimeType.git
    
    $ cd PHP-MimeType

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

## ☑ TODO

- [x] Create tests
- [x] Improve documentation

## Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

## Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2016 -2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).