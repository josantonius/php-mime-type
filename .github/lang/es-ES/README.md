# PHP MimeType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/mime-type/v/stable)](https://packagist.org/packages/josantonius/mime-type)
[![License](https://poser.pugx.org/josantonius/mime-type/license)](LICENSE)
[![Total Downloads](https://poser.pugx.org/josantonius/mime-type/downloads)](https://packagist.org/packages/josantonius/mime-type)
[![CI](https://github.com/josantonius/php-mime-type/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/josantonius/php-mime-type/actions/workflows/ci.yml)
[![CodeCov](https://codecov.io/gh/josantonius/php-mime-type/branch/main/graph/badge.svg)](https://codecov.io/gh/josantonius/php-mime-type)
[![PSR1](https://img.shields.io/badge/PSR-1-f57046.svg)](https://www.php-fig.org/psr/psr-1/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](https://www.php-fig.org/psr/psr-4/)
[![PSR12](https://img.shields.io/badge/PSR-12-1abc9c.svg)](https://www.php-fig.org/psr/psr-12/)

**Traducciones**: [English](/README.md)

Biblioteca PHP para obtener encabezados MIME y extensiones a partir de ellos.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Clases disponibles](#clases-disponibles)
  - [MimeType](#mimetype)
  - [MimeTypeCollection](#mimetypecollection)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#tareas-pendientes)
- [Registro de Cambios](#registro-de-cambios)
- [Contribuir](#contribuir)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

- Sistema operativo: Linux | Windows.

- Versiones de PHP: 8.0 | 8.1 | 8.2.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP MimeType library**, simplemente escribe:

```console
composer require josantonius/mime-type
```

El comando anterior sólo instalará los archivos necesarios,
si prefieres **descargar todo el código fuente** puedes utilizar:

```console
composer require josantonius/mime-type --prefer-source
```

También puedes **clonar el repositorio** completo con Git:

```console
git clone https://github.com/josantonius/php-mime-type.git
```

## Clases disponibles

### MimeType

`Josantonius\MimeType\MimeType`

Obtener array con todos los tipos de MIME:

```php
public function all(): array;
```

Obtener extensión de archivo desde tipo de MIME:

```php
public function getExtension(string $mimeType): string|null;
```

Obtener tipo de MIME desde extensión de archivo:

```php
public function getMime(string $extension): string|null;
```

### MimeTypeCollection

`Josantonius\MimeType\MimeTypeCollection`

Obtener array con todos los tipos de MIME:

```php
public static function all(): array;
```

Obtener extensión de archivo desde tipo de MIME:

```php
public static function getExtension(string $mimeType): string|null;
```

Obtener tipo de MIME desde extensión de archivo:

```php
public static function getMime(string $extension): string|null;
```

## Uso

Ejemplo de uso para esta biblioteca:

### Obtener array con todos los tipos de MIME

```php
use Josantonius\MimeType\MimeType;

$mimeType = new MimeType();

$mimeType->all();
```

```php
use Josantonius\MimeType\MimeTypeCollection;

MimeTypeCollection::all();
```

Resultado:

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

### Obtener extensión de archivo desde tipo de MIME

```php
use Josantonius\MimeType\MimeType;

$mimeType = new MimeType();

$mimeType->getExtension('text/html'); // .html
```

```php
use Josantonius\MimeType\MimeTypeCollection;

MimeTypeCollection::getExtension('application/zip'); // .zip
```

### Obtener tipo de MIME desde extensión de archivo

```php
use Josantonius\MimeType\MimeType;

$mimeType = new MimeType();

$mimeType->getMime('.tar'); // application/x-tar

// El punto puede ser omitido:

$mimeType->getMime('mp4'); // video/mp4
```

```php
use Josantonius\MimeType\MimeTypeCollection;

MimeTypeCollection::getMime('.json'); // application/json
```

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/)
y seguir los siguientes pasos:

```console
git clone https://github.com/josantonius/php-mime-type.git
```

```console
cd PHP-MimeType
```

```console
composer install
```

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Ejecutar pruebas de estándares de código con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias
en el estilo de codificación:

```console
composer phpmd
```

Ejecutar todas las pruebas anteriores:

```console
composer tests
```

## Tareas pendientes

- [ ] Añadir nueva funcionalidad
- [ ] Mejorar pruebas
- [ ] Mejorar documentación
- [ ] Mejorar la traducción al inglés en el archivo README
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas
(ver [phpmd.xml](phpmd.xml) y [phpcs.xml](phpcs.xml))

## Registro de Cambios

Los cambios detallados de cada versión se documentan en las
[notas de la misma](https://github.com/josantonius/php-mime-type/releases).

## Contribuir

Por favor, asegúrate de leer la [Guía de contribución](CONTRIBUTING.md) antes de hacer un
_pull request_, comenzar una discusión o reportar un _issue_.

¡Gracias por [colaborar](https://github.com/josantonius/php-mime-type/graphs/contributors)! :heart:

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2016-actualidad, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
