<?php

use ServiceContainer\Core\App;

$providers = [
    \ServiceContainer\Providers\DatabaseServiceProvider::class,
];

foreach ($providers as $provider) {
    $provider = App::getContainer()->get($provider);
    $provider->register();
}