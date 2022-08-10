<?php

namespace Greatatoo\LaravelBasic\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelBasic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-basic';
    }
}
