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

use Josantonius\MimeType\MimeType,
    PHPUnit\Framework\TestCase;

/**
 * Tests class for MimeType library.
 *
 * @since 1.0.0
 */
class MimeTypeTest extends TestCase { 

    /**
     * Get Jsond file with MIME types and return array.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGet() {

        $src = dirname(dirname(dirname(__FILE__))) . '/src/';

        $this->assertIsReadable($src. 'resources/mimeTypes.jsond');

        $this->assertArrayHasKey('.html', MimeType::get());
    }

    /**
     * Get MIME type from file extension.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetMimeFromExtension() {

        $this->assertEquals(

            'text/html',
            MimeType::getMimeFromExtension('.html')
        );
    }

    /**
     * Getting a MIME Type wrong.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetMimeFromExtensionUndefined() {

        $this->assertFalse(MimeType::getMimeFromExtension('abcde'));
    }

    /**
     * Get file extension from MIME type.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetExtensionFromMime() {
        
        $this->assertEquals(

            '.html',
            MimeType::getExtensionFromMime('text/html')
        );
    }

    /**
     * Getting a MIME Type wrong.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetExtensionFromMimeUndefined() {

        $this->assertFalse(MimeType::getExtensionFromMime('abcd/abcd'));
    }
}
