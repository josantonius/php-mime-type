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

use PHPUnit\Framework\TestCase;

/**
 * Tests class for MimeType library.
 *
 *
 * @since 1.0.0
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
        $actual = $this->MimeType;
        $this->assertInstanceOf('Josantonius\MimeType\MimeType', $actual);
    }

    /**
     * Get Jsond file with MIME types and return array.
     *
     * @since 1.1.3
     */
    public function testGet()
    {
        $this->assertArrayHasKey('.html', $this->MimeType->get());
    }

    /**
     * Get MIME type from file extension.
     *
     * @since 1.0.0
     */
    public function testGetMimeFromExtension()
    {
        $this->assertSame(
            'text/html',
            $this->MimeType->getMimeFromExtension('.html')
        );
    }

    /**
     * Getting a MIME Type wrong.
     *
     * @since 1.0.0
     */
    public function testGetMimeFromExtensionUndefined()
    {
        $this->assertFalse($this->MimeType->getMimeFromExtension('abcde'));
    }

    /**
     * Get file extension from MIME type.
     *
     * @since 1.0.0
     */
    public function testGetExtensionFromMime()
    {
        $this->assertSame(
            '.html',
            $this->MimeType->getExtensionFromMime('text/html')
        );
    }

    /**
     * Getting a MIME Type wrong.
     *
     * @since 1.0.0
     */
    public function testGetExtensionFromMimeUndefined()
    {
        $this->assertFalse($this->MimeType->getExtensionFromMime('abcd/abcd'));
    }
}
