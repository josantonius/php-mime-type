<?php declare(strict_types=1);
/**
 * PHP library for obtain headers MIME.
 * 
 * @category   JST
 * @package    MimeType
 * @subpackage MimeType
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2016 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-MimeType
 * @since      File available since 1.0.0 - Update: 2016-12-19
 */

namespace Josantonius\MimeType;

# use Josantonius\MimeType\Exception\MimeTypeException;

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
    protected static function load(): array {

        if (is_null(static::$mimeTypes)) {

            $filepath = __DIR__ . "/resources/mimeTypes.jsond";

            $jsonFile  = file_get_contents($filepath);

            $mimeTypes = json_decode($jsonFile, true);

            static::$mimeTypes = $mimeTypes['data'];

            unset($mimeTypes);
        }

        return static::$mimeTypes;
    }

    /**
     * Get MIME type from file extension.
     *
     * @since 1.0.0
     *
     * @param  $ext string → file extension, e.g. ".html"
     *
     * @throws MimeTypeException → file extension not found
     * @return string            → MIME type
     */
    public static function getMimeFromExtension(string $ext): string {

        static::load();

        return static::$mimeTypes[$ext] ?? "undefined";
    }

    /**
     * Get file extension from MIME type.
     *
     * @since 1.0.0
     *
     * @param  $mime string → MIME type, e.g. "text/html"
     *
     * @throws MimeTypeException → MIME type not found
     * @return string            → file extension
     */
    public static function getExtensionFromMime(string $mime): string {

        static::load();

        if ($index = array_search($mime, static::$mimeTypes)) {

            return $index;
        }

        return "undefined";
    }

    /**
     * Get all MIME types as array.
     *
     * @since 1.0.0
     *
     * @return array → MIME types
     */
    public static function getAll(): array {
        
        return static::load();
    }
}
