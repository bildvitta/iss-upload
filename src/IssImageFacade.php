<?php

namespace Bildvitta\IssImage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bildvitta\IssImage\IssImage
 */
class IssImageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iss-image';
    }
}
