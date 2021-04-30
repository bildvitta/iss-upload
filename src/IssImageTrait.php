<?php

namespace Bildvitta\IssImage;

/**
 * Trait IssImageTrait.
 *
 * @package Bildvitta\IssImage
 */
trait IssImageTrait
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
     * @return IssImageContract
     */
    public function setEntity(?string $entity): IssImageContract
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @param  string|null  $filename
     *
     * @return IssImageContract
     */
    public function setFilename(?string $filename): IssImageContract
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * @param  string|null  $mineType
     *
     * @return IssImageContract
     */
    public function setMineType(?string $mineType): IssImageContract
    {
        $this->mineType = $mineType;

        return $this;
    }
}