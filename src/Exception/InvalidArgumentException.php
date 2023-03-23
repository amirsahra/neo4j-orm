<?php

namespace Amirsahra\Neo4jORM\Exception;

use Exception;

class InvalidArgumentException extends Exception
{
    protected $message = 'Database connection [Neo4j] not configured, It is possible that the config file does not exist or was not created correctly';
}
