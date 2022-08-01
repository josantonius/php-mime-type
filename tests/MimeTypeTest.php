<?php

/*
* This file is part of https://github.com/josantonius/php-mime-type repository.
*
* (c) Josantonius <hello@josantonius.dev>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
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

    public function testShouldGetAllMimeTypes(): void
    {
        $this->assertNotEmpty($this->mimeType->getAll());

        $this->assertNotEmpty($this->collection->getAll());
    }

    public function testShouldGetMimeTypeFromExtension(): void
    {
        $this->assertSame('text/html', $this->mimeType->getMime('.html'));

        $this->assertSame('text/html', $this->collection->getMime('.html'));
    }

    public function testShouldReturnNullWithAnUnknownExtension(): void
    {
        $this->assertNull($this->mimeType->getMime('.foo'));

        $this->assertNull($this->collection->getMime('.foo'));
    }

    public function testShouldGetExtensionFromMimeType(): void
    {
        $this->assertSame('.html', $this->mimeType->getExtension('text/html'));

        $this->assertSame('.html', $this->collection->getExtension('text/html'));
    }

    public function testShouldReturnNullWithAnUnknownMimeType(): void
    {
        $this->assertNull($this->mimeType->getExtension('bar'));

        $this->assertNull($this->collection->getExtension('bar'));
    }
}
