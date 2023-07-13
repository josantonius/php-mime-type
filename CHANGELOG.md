# CHANGELOG

## [v2.0.3](https://github.com/josantonius/php-mime-type/releases/tag/v2.0.3) (2023-07-13)

> The original concept of my project, linking a single mimetype to a file extension, has been found to be insufficient in accurately reflecting the many-to-one relationships that exist in real-world use-cases. In practice, multiple file extensions often correspond to a single mimetype, rendering my existing design approach suboptimal.

> Given these insights, I've decided to archive this repository. I recommend those interested to look at the approach taken by the repository [patrickmccallum/mimetype-io](https://github.com/patrickmccallum/mimetype-io/blob/master/src/mimeData.json). This project adopts a more nuanced perspective, effectively managing mimetypes by acknowledging the possibility of multiple extensions corresponding to a single mimetype. I believe this is a more promising approach for managing mimetypes moving forward.

* Added MIME type by @scicali in
[#13](https://github.com/josantonius/php-mime-type/pull/13).

* Added MIME type by @derrickobedgiu1 in
[#12](https://github.com/josantonius/php-mime-type/pull/12).

## [v2.0.2](https://github.com/josantonius/php-mime-type/releases/tag/v2.0.2) (2022-09-29)

* The notation type in the test function names has been changed from camel to snake case for readability.

* Functions were added to document the methods and avoid confusion.

* Disabled the ´CamelCaseMethodName´ rule in ´phpmd.xml´ to avoid warnings about function names in tests.

* The alignment of the asterisks in the comments has been fixed.

* Tests for Windows have been added.

* Tests for PHP 8.2 have been added.

## [v2.0.1](https://github.com/josantonius/php-mime-type/releases/tag/v2.0.1) (2022-08-11)

* Improved documentation.

## [v2.0.0](https://github.com/josantonius/php-mime-type/releases/tag/v2.0.0) (2022-08-01)

> Version 1.x is considered as deprecated and unsupported.
> In this version (2.x) the library was completely restructured.
> It is recommended to review the documentation for this version and make the necessary changes
> before starting to use it, as it not be compatible with version 1.x.

---

* The library was completely refactored.

* Support for PHP version 8.0.

* Support for earlier versions of PHP **8.0** is discontinued.

* Replaced all static methods in `Josantonius\MimeType\MimeType` class.

* Improved documentation; `README.md`, `CODE_OF_CONDUCT.md`, `CONTRIBUTING.md` and `CHANGELOG.md`.

* Removed `Codacy`.

* Removed `PHP Coding Standards Fixer`.

* The `master` branch was renamed to `main`.

* The `develop` branch was added to use a workflow based on `Git Flow`.

* `Travis` is discontinued for continuous integration. `GitHub Actions` will be used from now on.

* Added `.github/CODE_OF_CONDUCT.md` file.
* Added `.github/CONTRIBUTING.md` file.
* Added `.github/FUNDING.yml` file.
* Added `.github/workflows/ci.yml` file.
* Added `.github/lang/es-ES/CODE_OF_CONDUCT.md` file.
* Added `.github/lang/es-ES/CONTRIBUTING.md` file.
* Added `.github/lang/es-ES/LICENSE` file.
* Added `.github/lang/es-ES/README` file.

* Deleted `.travis.yml` file.
* Deleted `.editorconfig` file.
* Deleted `CONDUCT.MD` file.
* Deleted `README-ES.MD` file.
* Deleted `.php_cs.dist` file.

## [1.1.7](https://github.com/josantonius/php-mime-type/releases/tag/1.0.0) (2018-01-06)

* The tests were fixed.

* Changes in documentation.

## [1.1.6](https://github.com/josantonius/php-mime-type/releases/tag/1.1.6) (2017-11-09)

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## [1.1.5](https://github.com/josantonius/php-mime-type/releases/tag/1.1.5) (2017-11-02)

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `DataType/phpcs.ruleset.xml` file.

## [1.1.4](https://github.com/josantonius/php-mime-type/releases/tag/1.1.4) (2017-10-19)

* Autoloaded with `PSR-4` all library files and test files

* Dropped the use of a `JSON` file with mime types list and used `PHP` class instead.

* Deleted `Josantonius\MimeType\MimeType::_getFromFile()` method.

* Changed `Josantonius\MimeType\Test\MimeTypeTest` class to `Josantonius\MimeType\MimeTypeTest` class.

* Deleted `MimeType/src/bootstrap.php` file

* Deleted `MimeType/tests/bootstrap.php` file.

* Deleted `MimeType/vendor` folder.

* Deleted `MimeType/resources` folder

* Added `Josantonius\MimeType\MimeTypesCollection` class.
* Added `Josantonius\MimeType\MimeTypesCollection::all()` method.
* Added `Josantonius\MimeType\MimeTypesCollection::get()` method.

## [1.1.3](https://github.com/josantonius/php-mime-type/releases/tag/1.1.3) (2017-09-10)

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Deleted `Josantonius\MimeType\MimeType::load()` method.
* Deleted `Josantonius\MimeType\MimeType::getAll()` method.

* Added `Josantonius\MimeType\MimeType::get()` method.

* Added `Josantonius\MimeType\MimeType::get()` method.

* Deleted `Josantonius\MimeType\Tests\MimeTypeTest` class.
* Deleted `Josantonius\MimeType\Tests\MimeTypeTest::testGetMimeFromExtension()` method.
* Deleted `Josantonius\MimeType\Tests\MimeTypeTest::testGetMimeFromExtensionUndefined()` method.
* Deleted `Josantonius\MimeType\Tests\MimeTypeTest::testGetExtensionFromMime()` method.
* Deleted `Josantonius\MimeType\Tests\MimeTypeTest::testGetExtensionFromMimeUndefined()` method.
* Deleted `Josantonius\MimeType\Tests\MimeTypeTest::testGetAll()` method.

* Added `Josantonius\MimeType\Test\MimeTypeTest::_getFromFile()` method.
* Added `Josantonius\MimeType\Test\MimeTypeTest` class.
* Added `Josantonius\MimeType\Test\MimeTypeTest::testGetMimeFromExtension()` method.
* Added `Josantonius\MimeType\Test\MimeTypeTest::testGetMimeFromExtensionUndefined()` method.
* Added `Josantonius\MimeType\Test\MimeTypeTest::testGetExtensionFromMime()` method.
* Added `Josantonius\MimeType\Test\MimeTypeTest::testGetExtensionFromMimeUndefined()` method.

* Added `MimeType/src/bootstrap.php` file

* Added `MimeType/tests/bootstrap.php` file.

* Added `MimeType/phpunit.xml.dist` file.
* Added `MimeType/_config.yml` file.
* Added `MimeType/.travis.yml` file.

## [1.1.2](https://github.com/josantonius/php-mime-type/releases/tag/1.1.2) (2017-07-16)

* Deleted `Josantonius\MimeType\Exception\MimeTypeException` class.
* Deleted `Josantonius\MimeType\Exception\Exceptions` abstract class.
* Deleted `Josantonius\MimeType\Exception\MimeTypeException->__construct()` method.

## [1.1.1](https://github.com/josantonius/php-mime-type/releases/tag/1.1.1) (2017-03-18)

* Some files were excluded from download and comments and readme files were updated.

## [1.1.0](https://github.com/josantonius/php-mime-type/releases/tag/1.0.0) (2017-01-31)

* Compatible with PHP 5.6 or higher.

## [1.0.0](https://github.com/josantonius/php-mime-type/releases/tag/1.0.0) (2016-12-19)

* Compatible only with PHP 7.0 or higher. In the next versions,
the library will be modified to make it compatible with PHP 5.6 or higher.

* Added `Josantonius\MimeType\MimeType` class.
* Added `Josantonius\MimeType\MimeType::load()` method.
* Added `Josantonius\MimeType\MimeType::getMimeFromExtension()` method.
* Added `Josantonius\MimeType\MimeType::getExtensionFromMime()` method.
* Added `Josantonius\MimeType\MimeType::getAll()` method.
* Added `Josantonius\MimeType\Exception\MimeTypeException` class.
* Added `Josantonius\MimeType\Exception\Exceptions` abstract class.
* Added `Josantonius\MimeType\Exception\MimeTypeException->__construct()` method.
* Added `Josantonius\MimeType\Tests\MimeTypeTest` class.
* Added `Josantonius\MimeType\Tests\MimeTypeTest::testGetMimeFromExtension()` method.
* Added `Josantonius\MimeType\Tests\MimeTypeTest::testGetMimeFromExtensionUndefined()` method.
* Added `Josantonius\MimeType\Tests\MimeTypeTest::testGetExtensionFromMime()` method.
* Added `Josantonius\MimeType\Tests\MimeTypeTest::testGetExtensionFromMimeUndefined()` method.
* Added `Josantonius\MimeType\Tests\MimeTypeTest::testGetAll()` method.
