<?php
/**
 * PHP library for obtain headers MIME.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2018 (c) Josantonius - PHP-MimeType
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-MimeTypeype
 * @since     1.0.0
 */
namespace Josantonius\MimeType;

/**
 * Get MIME type and file extensions.
 */
class MimeType
{
    /**
     * Get array with all MIME types.
     *
     * @since 1.1.3
     *
     * @return array → MIME types
     */
    public static function get()
    {
        return MimeTypesCollection::all();
    }

    /**
     * Get MIME type from file extension.
     *
     * @param string $ext → file extension, e.g. '.html'
     *
     * @return string|false → MIME type or false
     */
    public static function getMimeFromExtension($ext)
    {
        return MimeTypesCollection::get($ext) ?: false;
    }

    /**
     * Get file extension from MIME type.
     *
     * @param string $mime → MIME type, e.g. 'text/html'
     *
     * @return string|false → file extension or false
     */
    public static function getExtensionFromMime($mime)
    {
        return array_search($mime, MimeTypesCollection::all(), true);
    }
}
