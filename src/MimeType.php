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
     * Load Jsond file with MIME types.
     *
     * @since 1.0.0
     *
     * @return array → MIME types
     */
    protected static function load() {

        if (is_null(self::$mimeTypes)) {

            $filepath = __DIR__ . '/resources/mimeTypes.jsond';

            $jsonFile  = file_get_contents($filepath);

            $mimeTypes = json_decode($jsonFile, true);

            self::$mimeTypes = $mimeTypes['data'];

            unset($mimeTypes);
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
     * @throws MimeTypeException → file extension not found
     * @return string            → MIME type
     */
    public static function getMimeFromExtension($ext) {

        self::load();

        return (isset(self::$mimeTypes[$ext]) ? self::$mimeTypes[$ext] : 'undefined');
    }

    /**
     * Get file extension from MIME type.
     *
     * @since 1.0.0
     *
     * @param string $mime → MIME type, e.g. 'text/html'
     *
     * @throws MimeTypeException → MIME type not found
     * @return string            → file extension
     */
    public static function getExtensionFromMime($mime) {

        self::load();

        if ($index = array_search($mime, self::$mimeTypes)) {

            return $index;
        }

        return 'undefined';
    }

    /**
     * Get all MIME types as array.
     *
     * @since 1.0.0
     *
     * @return array → MIME types
     */
    public static function getAll() {
        
        return self::load();
    }
}
