<?php

namespace ChihYuLin66\LaravelJsonHelper;

use Illuminate\Support\Facades\Facade;

class JsonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'json';
    }
}
