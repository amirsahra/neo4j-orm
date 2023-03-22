<?php

namespace Amirsahra\Neo4jORM\src\Core;

use Amirsahra\Neo4jORM\src\Exception\InvalidArgumentException;

class Config
{
    /**
     * @throws InvalidArgumentException
     */
    public function check(): bool
    {
        if (!\Illuminate\Support\Facades\Config::has('database.connections.neo4j')) {
            throw new InvalidArgumentException();
        }
    }

    public function isValid()
    {
    }
}
