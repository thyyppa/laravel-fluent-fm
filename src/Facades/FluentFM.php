<?php namespace Hyyppa\LaravelFluentFM\Facades;

use Illuminate\Support\Facades\Facade;

class FluentFM extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws RuntimeException
     */
    protected static function getFacadeAccessor() : string
    {
        return 'laravel-fluent-fm';
    }

}
