<?php

namespace Amirsahra\Neo4jORM\Core\Utility;

use Amirsahra\Neo4jORM\Exception\ConfigFileNotFoundException;
use Amirsahra\Neo4jORM\Exception\ConfigKeyNotFoundException;
use Illuminate\Support\Facades\Config;

class ConfigHelper
{
    /**
     * @throws ConfigFileNotFoundException
     */
    public function fileExists(): bool
    {
        if (!Config::has('neo4jORM')) {
            throw new ConfigFileNotFoundException();
        }
        return true;
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    public function keyExists(string $keyName): bool
    {
        if (!Config::has('neo4jORM.' . $keyName)) {
            throw new ConfigKeyNotFoundException();
        }
        return true;
    }
}
