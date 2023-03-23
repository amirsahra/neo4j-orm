<?php

namespace Amirsahra\Neo4jORM;

use Illuminate\Support\ServiceProvider;

class Neo4jORMServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        parent::register();
        $this->app->bind('Neo4jORM', function () {
            return new Neo4jORM();
        });
    }

    public function boot(): void
    {

    }
}
