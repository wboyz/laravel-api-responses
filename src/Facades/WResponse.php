<?php

namespace WBoyz\LaravelApiResponses\Facades;

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
        return 'WBoyz\LaravelApiResponses\WResponse';
//        return 'WBoyz\LaravelApiResponses\Contracts\WResponseFactory';
    }
}
