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

namespace Josantonius\MimeType;

/**
 * Get MIME type and file extensions.
 *
 * @since 1.0.0
 */
class MimeType { 

    /**
     * MIME types list.
     *
     * @since 1.0.0
     *
     * @var array
     */
    public static $mimeTypes;

    /**
     * Get Jsond file with MIME types and return array.
     *
     * @since 1.1.3
     *
     * @return array → MIME types
     */
    public static function get() {

        if (!self::$mimeTypes) {

            self::$mimeTypes = self::_getFromFile();
        }

        return self::$mimeTypes;
    }

    /**
     * Get MIME type from file extension.
     *
     * @since 1.0.0
     *
     * @param string $ext → file extension, e.g. '.html'
     *
     * @return string|false → MIME type or false
     */
    public static function getMimeFromExtension($ext) {

        self::get();

        return isset(self::$mimeTypes[$ext]) ? self::$mimeTypes[$ext] : false;
    }

    /**
     * Get file extension from MIME type.
     *
     * @since 1.0.0
     *
     * @param string $mime → MIME type, e.g. 'text/html'
     *
     * @return string|false → file extension or false
     */
    public static function getExtensionFromMime($mime) {

        self::get();

        return array_search($mime, self::$mimeTypes);
    }

    /**
     * Get MIME types fron Jsond file.
     *
     * @since 1.1.3
     *
     * @return array → MIME types
     */
    private static function _getFromFile() {

        $filepath = dirname(dirname(__FILE__)) . '/resources/mimeTypes.jsond';

        $jsonFile  = file_get_contents($filepath);

        $mimeTypes = json_decode($jsonFile, true);

        return $mimeTypes['data'];
    }
}
