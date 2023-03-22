<?php

namespace Amirsahra\Neo4jORM\src\Core;

use Amirsahra\Neo4jORM\src\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Config;
use Laudis\Neo4j\Authentication\Authenticate;
use Laudis\Neo4j\ClientBuilder;

class Connection
{
    // Hold the class instance.
    private static $instance = null;
    private $conn;

    private $host = 'localhost';
    private $user = 'db user-name';
    private $pass = 'db password';
    private $name = 'db name';

    // The db connection is established in the private constructor.
    private function __construct()
    {
        // connection code
        $this->conn = $this->run();
    }

    public static function getInstance(): ?Connection
    {
        if (!self::$instance) {
            self::$instance = new Connection();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }


    public function run()
    {
        $auth = Authenticate::basic(Config::get('database.connections.neo4j.username'),
            Config::get('database.connections.neo4j.password')
        );

        $dirver = Config::get('database.connections.neo4j.neo4j.host') .
            ':' . Config::get('database.connections.neo4j.neo4j.port');
        return ClientBuilder::create()
            //->withDriver('bolt', 'bolt://neo4j:test@localhost')
            ->withDriver('neo4j', $dirver, $auth)
            //->withDriver('https', 'https://localhost:7473')
            //->withDefaultDriver('neo4j')
            ->build();

    }

    /**
     * @throws InvalidArgumentException
     */
    private function hasConfig()
    {
        if (!Config::has('database.connections.neo4j')) {
            throw new InvalidArgumentException();
        }
    }
}
