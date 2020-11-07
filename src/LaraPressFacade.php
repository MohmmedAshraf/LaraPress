<?php

namespace Outhebox\LaraPress;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Outhebox\LaraPress\LaraPress
 */
class LaraPressFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larapress';
    }
}
