<?php

namespace Amirsahra\Neo4jORM;

use Illuminate\Support\ServiceProvider;

class Neo4jORMServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('Neo4jORM', function ($app) {
            return new Neo4jORM();
        });

        $this->mergeConfigFrom(__DIR__ . '/Config/neo4jORM.php','neo4jORM');
    }

    public function boot(): void
    {

    }
}
