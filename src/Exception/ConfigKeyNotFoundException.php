<?php

namespace Amirsahra\Neo4jORM\Exception;

use Exception;

class ConfigKeyNotFoundException extends Exception
{
    protected $message = "The Neo4jORM configuration key was not found.";
}
