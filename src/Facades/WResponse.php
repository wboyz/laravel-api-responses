<?php

namespace Laravel\LaravelApiResponses\Facades;

use Illuminate\Support\Facades\Facade;

class WResponse extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Laravel\LaravelApiResponses\WResponse';
//        return 'Laravel\LaravelApiResponses\Contracts\WResponseFactory';
    }
}
