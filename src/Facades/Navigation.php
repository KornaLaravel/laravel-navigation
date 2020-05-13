<?php

namespace Spatie\Navigation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Navigation\Navigation
 */
class Navigation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Spatie\Navigation\Navigation::class;
    }
}
