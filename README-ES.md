# PHP MimeType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/MimeType/v/stable)](https://packagist.org/packages/josantonius/MimeType) [![Latest Unstable Version](https://poser.pugx.org/josantonius/MimeType/v/unstable)](https://packagist.org/packages/josantonius/MimeType) [![License](https://poser.pugx.org/josantonius/MimeType/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/e4aa9b3dba374408ab1d35eca147ca50)](https://www.codacy.com/app/Josantonius/PHP-MimeType?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-MimeType&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/MimeType/downloads)](https://packagist.org/packages/josantonius/MimeType) [![Travis](https://travis-ci.org/Josantonius/PHP-MimeType.svg)](https://travis-ci.org/Josantonius/PHP-MimeType) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-MimeType/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-MimeType)

[English version](README.md)

Biblioteca PHP para obtener encabezados MIME y extensiones a partir de ellos.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP MimeType library**, simplemente escribe:

    $ composer require Josantonius/MimeType

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/MimeType --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone https://github.com/Josantonius/PHP-MimeType.git

O **instalarlo manualmente**:

Descargar [MimeType.php](https://raw.githubusercontent.com/Josantonius/PHP-MimeType/master/src/MimeType.php) y [MimeTypesCollection.php](https://raw.githubusercontent.com/Josantonius/PHP-MimeType/master/src/MimeTypesCollection.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-MimeType/master/src/MimeType.php

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-MimeType/master/src/MimeTypesCollection.php

## Métodos disponibles

### - Obtener array con todos los tipos de MIME:

```php
MimeType::get();
```

**# Return** (void)

### - Obtener tipo de MIME desde extensión de archivo:

```php
MimeType::getMimeFromExtension($ext);
```

| Atributo | Descripción | Tipo | Requerido
| --- | --- | --- | --- |
| $ext | Extensión. | string | Sí |

**# Return** (string|false) → MIME type o falso

### - Obtener extensión de archivo desde tipo de MIME:

```php
MimeType::getExtensionFromMime($mime);
```

| Atributo | Descripción | Tipo | Requerido
| --- | --- | --- | --- |
| $mime | Tipo de MIME. | string | Sí |

**# Return** (string|false) → extensión de archivo o false

## Cómo empezar

Para utilizar esta biblioteca, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\MimeType\MimeType;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/MimeType.php';
require_once __DIR__ . '/MimeTypesCollection.php';

use Josantonius\MimeType\MimeType;
```

## Uso

Ejemplo de uso para esta biblioteca:

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

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/Josantonius/PHP-MimeType.git
    
    $ cd PHP-MimeType

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    $ composer phpmd

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [ ] Añadir nueva funcionalidad.
- [ ] Mejorar pruebas.
- [ ] Mejorar documentación.
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas. Ver [phpmd.xml](phpmd.xml) y [.php_cs.dist](.php_cs.dist).

## Contribuir

Si deseas colaborar, puedes echar un vistazo a la lista de
[issues](https://github.com/Josantonius/PHP-MimeType/issues) o [tareas pendientes](#-tareas-pendientes).

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Ejecuta el comando `composer install` para instalar dependencias.
  Esto también instalará las [dependencias de desarrollo](https://getcomposer.org/doc/03-cli.md#install).
* Ejecuta el comando `composer fix` para estandarizar el código.
* Ejecuta las [pruebas](#tests).
* Crea una nueva rama (**branch**), **commit**, **push** y envíame un
  [pull request](https://help.github.com/articles/using-pull-requests).

**¡Gracias a quienes ya habéis contribuido a este proyecto!**

[<img alt="vincent-guesnard" src="https://avatars3.githubusercontent.com/u/315173?v=4&s=117" height="117" width="117">](https://github.com/vincent-guesnard)|[<img alt="MASNathan" src="https://avatars0.githubusercontent.com/u/2139464?v=4&s=117" height="117" width="117">](https://github.com/MASNathan)
:---:|:---:|
[vincent-guesnard](https://github.com/vincent-guesnard)|[MASNathan](https://github.com/MASNathan)|

## Repositorio

La estructura de archivos de este repositorio se creó con [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2016 - 2018 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).