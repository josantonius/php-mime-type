<?php declare(strict_types=1);
/**
 * PHP library for obtain headers MIME.
 * 
 * @category   JST
 * @package    MimeType
 * @subpackage MimeTypeException
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2016 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-MimeType
 * @since      File available since 1.0.0 - Update: 2016-12-19
 */

namespace Josantonius\MimeType\Exception;

/**
 * Exception class for MimeType library.
 *
 * You can use an exception and error handler with this library.
 *
 * @since 1.0.0
 *
 * @link https://github.com/Josantonius/PHP-ErrorHandler
 */
class MimeTypeException extends \Exception { 

    /**
     * Exception handler.
     *
     * @since 1.0.0
     *
     * @param string $msg    → message error (Optional)
     * @param int    $error  → error code (Optional)
     * @param int    $status → HTTP response status code (Optional)
     */
    public function __construct(string $msg = '', int $error = 0, int $status = 0) {

        $this->message    = $msg;
        $this->code       = $error;
        $this->statusCode = $status;
    }
}