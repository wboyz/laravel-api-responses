<?php

namespace WBoyz\LaravelApiResponses;

use Illuminate\Support\ServiceProvider;

class WResponseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('WResponse', function ($app) {
            return new WResponse();
        });
//        $this->app->singleton('WBoyz\LaravelApiResponses\Contracts\WResponseFactory', function ($app) {
//            return new WResponse($app);
//        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
