<?php

namespace Bildvitta\IssUpload;

/**
 * Trait IssUploadTrait.
 *
 * @package Bildvitta\IssUpload
 */
trait IssUploadTrait
{
    /**
     * @var string|null
     */
    protected ?string $entity;

    /**
     * @var string|null
     */
    protected ?string $filename;

    /**
     * @var string|null
     */
    protected ?string $mimeType;

    /**
     * @param  string|null  $entity
     *
     * @return IssUploadContract
     */
    public function setEntity(?string $entity): IssUploadContract
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @param  string|null  $filename
     *
     * @return IssUploadContract
     */
    public function setFilename(?string $filename): IssUploadContract
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * @param  string|null  $mimeType
     *
     * @return IssUploadContract
     */
    public function setMimeType(?string $mimeType): IssUploadContract
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
