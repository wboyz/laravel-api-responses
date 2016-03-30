<?php

if (!function_exists('responseHelper')) {
    /**
     * @return \Wboyz\LaravelApiResponse\Responsess
     */
    function responseHelper()
    {
        return \Wboyz\LaravelApiResponse\Response::instantiate();
    }
}