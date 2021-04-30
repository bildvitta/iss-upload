<?php

namespace Bildvitta\IssImage;

/**
 * Interface IssImageContract.
 *
 * @package Bildvitta\IssImage
 */
interface IssImageContract
{
    /**
     * @return array
     */
    public function getUploadSource(): array;

    /**
     * @param  string|null  $entity
     *
     * @return IssImageContract
     */
    public function setEntity(?string $entity): IssImageContract;

    /**
     * @param  string|null  $filename
     *
     * @return IssImageContract
     */
    public function setFilename(?string $filename): IssImageContract;

    /**
     * @param  string|null  $mineType
     *
     * @return IssImageContract
     */
    public function setMineType(?string $mineType): IssImageContract;

}