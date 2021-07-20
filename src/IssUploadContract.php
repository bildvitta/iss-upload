<?php

namespace Bildvitta\IssUpload;

/**
 * Interface IssUploadContract.
 *
 * @package Bildvitta\IssUpload
 */
interface IssUploadContract
{
    /**
     * @return array
     */
    public function getUploadSource(): array;

    /**
     * @param  string|null  $entity
     *
     * @return IssUploadContract
     */
    public function setEntity(?string $entity): IssUploadContract;

    /**
     * @param  string|null  $filename
     *
     * @return IssUploadContract
     */
    public function setFilename(?string $filename): IssUploadContract;

    /**
     * @param  string|null  $mimeType
     *
     * @return IssUploadContract
     */
    public function setMimeType(?string $mimeType): IssUploadContract;
}
