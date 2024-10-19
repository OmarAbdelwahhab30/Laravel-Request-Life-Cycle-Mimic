<?php

namespace ServiceContainer\Providers;

use ServiceContainer\Core\App;

abstract class ServiceProvider
{

    protected App $app;

    public function register()
    {
        //
    }
}