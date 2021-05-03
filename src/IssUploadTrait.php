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
    protected ?string $mineType;

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
     * @param  string|null  $mineType
     *
     * @return IssUploadContract
     */
    public function setMineType(?string $mineType): IssUploadContract
    {
        $this->mineType = $mineType;

        return $this;
    }
}
