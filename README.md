# PHP MimeType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/mimetype/v/stable)](https://packagist.org/packages/josantonius/mimetype) [![Total Downloads](https://poser.pugx.org/josantonius/mimetype/downloads)](https://packagist.org/packages/josantonius/mimetype) [![Latest Unstable Version](https://poser.pugx.org/josantonius/mimetype/v/unstable)](https://packagist.org/packages/josantonius/mimetype) [![License](https://poser.pugx.org/josantonius/mimetype/license)](https://packagist.org/packages/josantonius/mimetype) [![Build Status](http://img.shields.io/travis/josantonius/php-mimetype.svg)](http://travis-ci.org/Josantonius/PHP-MimeType)

[Versión en español](README-ES.md)

PHP library for obtain headers MIME.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

<p align="center"><strong>Take a look at the code</strong></p>

<p align="center">
  <a href="https://youtu.be/h3Hrk8zxvA0" title="Take a look at the code">
    <img src="https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/resources/youtube-thumbnail.jpg">
  </a>
</p>

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP MimeType library, simply:

    $ composer require Josantonius/MimeType

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/MimeType --prefer-source

Or you can also clone the complete repository with Git:

    $ git clone https://github.com/Josantonius/PHP-MimeType.git

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\MimeType\MimeType;
```
### Available Methods

Available methods in this library:

```php
MimeType::get();
MimeType::getMimeFromExtension();
MimeType::getExtensionFromMime();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\MimeType\MimeType;

echo "[.json] → " . MimeType::getMimeFromExtension('.json'); // [.json] → application/json

echo "[text/html] → " . MimeType::getExtensionFromMime('text/html'); // [text/html] → .html

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

### Tests 

To run unit [tests](tests/MimeType), simply:

    $ git clone https://github.com/Josantonius/PHP-MimeType.git
    
    $ cd PHP-MimeType

    $ phpunit

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).