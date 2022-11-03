<?php

namespace ChihYuLin66\LaravelJsonHelper;

use ChihYuLin66\LaravelJsonHelper\Json;
use Illuminate\Support\ServiceProvider;

class JsonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('json', function($app) {
            return new Json();
        });
    }
}
