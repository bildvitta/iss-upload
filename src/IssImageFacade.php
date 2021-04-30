<?php

namespace Bildvitta\IssImage;

use Illuminate\Support\Facades\Facade;
use RuntimeException;

/**
 * @see \Bildvitta\IssImage\IssImage
 */
class IssImageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return 'iss-image';
    }
}
