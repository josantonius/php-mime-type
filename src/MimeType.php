<?php

/*
 * This file is part of https://github.com/josantonius/php-mime-type repository.
 *
 * (c) Josantonius <hello@josantonius.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Josantonius\MimeType;

/**
 * MIME type and file extension handler.
 */
class MimeType
{
    /**
     * Get array with all MIME types.
     */
    public function all(): array
    {
        return MimeTypeCollection::all();
    }

    /**
     * Get file extension from MIME type.
     */
    public function getExtension(string $mimeType): ?string
    {
        return MimeTypeCollection::getExtension($mimeType);
    }

    /**
     * Get MIME type from file extension.
     */
    public function getMime(string $extension): ?string
    {
        return MimeTypeCollection::getMime($extension);
    }
}
