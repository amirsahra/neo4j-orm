<?php

namespace Amirsahra\Neo4jORM\Exception;

use Exception;

class ConfigFileNotFoundException extends Exception
{
    protected $message = "The Neo4jORM configuration file was not found.";
}
