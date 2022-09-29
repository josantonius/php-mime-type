<?php

/*
 * This file is part of https://github.com/josantonius/php-mime-type repository.
 *
 * (c) Josantonius <hello@josantonius.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 */

namespace Josantonius\MimeType\Tests;

use PHPUnit\Framework\TestCase;
use Josantonius\MimeType\MimeType;
use Josantonius\MimeType\MimeTypeCollection;

class MimeTypeTest extends TestCase
{
    protected MimeType $mimeType;

    protected MimeTypeCollection $collection;

    public function setUp(): void
    {
        parent::setUp();

        $this->mimeType   = new MimeType();
        $this->collection = new MimeTypeCollection();
    }

    public function test_should_get_all_mime_types(): void
    {
        $this->assertNotEmpty($this->mimeType->all());

        $this->assertNotEmpty($this->collection->all());
    }

    public function test_should_get_mime_type_from_extension(): void
    {
        $this->assertSame('text/html', $this->mimeType->getMime('.html'));

        $this->assertSame('text/html', $this->collection->getMime('.html'));
    }

    public function test_should_return_null_with_an_unknown_extension(): void
    {
        $this->assertNull($this->mimeType->getMime('.foo'));

        $this->assertNull($this->collection->getMime('.foo'));
    }

    public function test_should_get_extension_from_mime_type(): void
    {
        $this->assertSame('.html', $this->mimeType->getExtension('text/html'));

        $this->assertSame('.html', $this->collection->getExtension('text/html'));
    }

    public function test_should_return_null_with_an_unknown_mime_type(): void
    {
        $this->assertNull($this->mimeType->getExtension('bar'));

        $this->assertNull($this->collection->getExtension('bar'));
    }
}
