<?php

if (! function_exists('wresponse')) {
    /**
     * Throw an HttpException with the given data.
     *
     * @return \WBoyz\LaravelApiResponses\WResponse
     */
    function wresponse()
    {
        return app('WResponse');
    }
}
