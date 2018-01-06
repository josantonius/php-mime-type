<?php
/**
 * PHP library for obtain headers MIME.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2018 (c) Josantonius - PHP-MimeType
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-MimeType
 * @since     1.0.0
 */
namespace Josantonius\MimeType;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for MimeType library.
 */
class MimeTypeTest extends TestCase
{
    /**
     * MimeType instance.
     *
     * @since 1.1.6
     *
     * @var object
     */
    protected $MimeType;

    /**
     * Set up.
     *
     * @since 1.1.6
     */
    public function setUp()
    {
        parent::setUp();

        $this->MimeType = new MimeType;
    }

    /**
     * Check if it is an instance of MimeType.
     *
     * @since 1.1.6
     */
    public function testIsInstanceOfMimeType()
    {
        $this->assertInstanceOf('Josantonius\MimeType\MimeType', $this->MimeType);
    }

    /**
     * Get Jsond file with MIME types and return array.
     *
     * @since 1.1.3
     */
    public function testGet()
    {
        $mimeType = $this->MimeType;

        $this->assertArrayHasKey('.html', $mimeType::get());
    }

    /**
     * Get MIME type from file extension.
     */
    public function testGetMimeFromExtension()
    {
        $mimeType = $this->MimeType;

        $this->assertSame(
            'text/html',
            $mimeType::getMimeFromExtension('.html')
        );
    }

    /**
     * Getting a MIME Type wrong.
     */
    public function testGetMimeFromExtensionUndefined()
    {
        $mimeType = $this->MimeType;

        $this->assertFalse($mimeType::getMimeFromExtension('abcde'));
    }

    /**
     * Get file extension from MIME type.
     */
    public function testGetExtensionFromMime()
    {
        $mimeType = $this->MimeType;

        $this->assertSame(
            '.html',
            $mimeType::getExtensionFromMime('text/html')
        );
    }

    /**
     * Getting a MIME Type wrong.
     */
    public function testGetExtensionFromMimeUndefined()
    {
        $mimeType = $this->MimeType;

        $this->assertFalse($mimeType::getExtensionFromMime('abcd/abcd'));
    }
}
