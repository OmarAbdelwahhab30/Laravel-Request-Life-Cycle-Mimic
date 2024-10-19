<?php

use League\Container\ReflectionContainer;
use ServiceContainer\Core\App;

$container = new League\Container\Container();
$container->delegate(new ReflectionContainer(true));


$container->add(\ServiceContainer\Database\Database::class);

$container->add(\ServiceContainer\Providers\DatabaseServiceProvider::class);


App::container($container);