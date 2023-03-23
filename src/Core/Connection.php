<?php

namespace Amirsahra\Neo4jORM\Core;

use Amirsahra\Neo4jORM\Core\Utility\Database;
use Amirsahra\Neo4jORM\Exception\ConfigKeyNotFoundException;
use Amirsahra\Neo4jORM\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Config;
use Laudis\Neo4j\Authentication\Authenticate;
use Laudis\Neo4j\ClientBuilder;
use Laudis\Neo4j\Contracts\ClientInterface;

class Connection
{
    /**
     * @throws ConfigKeyNotFoundException
     */
    public function __invoke(): ClientInterface
    {
        $database = new Database();
        $databaseInfo = $database->info();
        $auth = Authenticate::basic($databaseInfo['username'], $databaseInfo['password']);
        $driver = $databaseInfo['host'] . ':' . $databaseInfo['port'];
        return ClientBuilder::create()
            //->withDriver('bolt', 'bolt://neo4j:test@localhost')
            ->withDriver('neo4j', $driver, $auth)
            //->withDriver('https', 'https://localhost:7473')
            //->withDefaultDriver('neo4j')
            ->build();
    }

}
