<?php
/**
 * PHP library for obtain headers MIME.
 * 
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-MimeType
 * @since      1.0.0
 */

namespace Josantonius\MimeType\Tests;

use Josantonius\MimeType\MimeType;

/**
 * Tests class for MimeType library.
 *
 * @since 1.0.0
 */
class MimeTypeTest { 

    /**
     * Get MIME type from file extension.
     *
     * @since 1.0.0
     */
    public static function testGetMimeFromExtension() {

        echo MimeType::getMimeFromExtension('.html');
    }

    /**
     * Getting a MIME Type wrong.
     *
     * @since 1.0.0
     */
    public static function testGetMimeFromExtensionUndefined() {

        echo MimeType::getMimeFromExtension('abcd');
    }

    /**
     * Get file extension from MIME type.
     *
     * @since 1.0.0
     */
    public static function testGetExtensionFromMime() {

        echo MimeType::getExtensionFromMime('text/html');
    }

    /**
     * Getting a MIME Type wrong.
     *
     * @since 1.0.0
     */
    public static function testGetExtensionFromMimeUndefined() {

        echo MimeType::getExtensionFromMime('abcd/abcd');
    }

    /**
     * Get all MIME types as array.
     *
     * @since 1.0.0
     */
    public static function testGetAll() {

        echo '<pre>'; var_dump(MimeType::getAll()); echo '</pre>';
    }
}
