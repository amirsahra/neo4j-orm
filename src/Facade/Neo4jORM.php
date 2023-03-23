<?php

namespace Amirsahra\Neo4jORM\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Neo4jORM
 *
 * @package Amirsahra\Neo4jORM\Facade
 * @see \Amirsahra\Neo4jORM\Facade\Neo4jORM
 */
class Neo4jORM extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        //parent::getFacadeAccessor();
        return 'Neo4jORM';
    }
}
