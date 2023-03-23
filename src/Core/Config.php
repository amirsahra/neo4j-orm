<?php

namespace Amirsahra\Neo4jORM\Core;

use Amirsahra\Neo4jORM\Exception\InvalidArgumentException;

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
