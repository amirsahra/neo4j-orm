<?php

namespace Amirsahra\Neo4jORM\src;

use Amirsahra\Neo4jORM\src\Core\Connection;

class Neo4jORM
{
    public function test()
    {
        $n = new Connection();
        return $n->run();
    }
}
