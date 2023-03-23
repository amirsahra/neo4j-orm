<?php

namespace Amirsahra\Neo4jORM;

use Amirsahra\Neo4jORM\Core\Connection;
use Amirsahra\Neo4jORM\Core\Utility\Database;

class Neo4jORM
{
    public function test()
    {
        $n = new Connection();
        return $n();

        //$c= new Database();
        //dd($c->port());
    }
}
