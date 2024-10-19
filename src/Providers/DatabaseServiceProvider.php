<?php

namespace ServiceContainer\Providers;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use ServiceContainer\Core\App;
use ServiceContainer\Core\Container;
use League\Container\ServiceProvider\AbstractServiceProvider;
use ServiceContainer\Database\Database;

class DatabaseServiceProvider extends AbstractServiceProvider
{

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function register():void
    {
        $db = App::getContainer()->get(Database::class);
        $db->connect();
        App::getContainer()->add("DatabaseConnection",$db);
    }

    public function provides(string $id): bool
    {
        // TODO: Implement provides() method.
    }
}