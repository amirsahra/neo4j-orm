<?php

namespace Amirsahra\Neo4jORM\Core\Utility;

use Amirsahra\Neo4jORM\Exception\ConfigFileNotFoundException;
use Amirsahra\Neo4jORM\Exception\ConfigKeyNotFoundException;
use Illuminate\Support\Facades\Config;

//TODO this class must be cache
class Database
{
    private ConfigHelper $configHelper;
    private array $config;

    /**
     * @throws ConfigFileNotFoundException
     */
    public function __construct()
    {
        $this->configHelper = new ConfigHelper();
        $this->configHelper->fileExists();
        $this->config = Config::get('neo4jORM');
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    public function info(): array
    {
        return[
            'driver' => $this->driver(),
            'username' => $this->username(),
            'password' => $this->password(),
            'host' => $this->host(),
            'port' => $this->port(),
        ];
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    private function username(): string
    {
        $this->configHelper->keyExists('username');
        return $this->config['username'];
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    private function password(): string
    {
        $this->configHelper->keyExists('password');
        return $this->config['password'];
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    private function driver()
    {
        $this->configHelper->keyExists('default');
        return $this->config['default'] ?? 'neo4j';
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    private function host(): string
    {
        $driver = $this->driver();
        $this->configHelper->keyExists('drivers.' . $driver . '.host');
        return $this->config['drivers'][$driver]['host'];
    }

    /**
     * @throws ConfigKeyNotFoundException
     */
    private function port(): int
    {
        $driver = $this->driver();
        $this->configHelper->keyExists('drivers.' . $driver . '.port');
        return $this->config['drivers'][$driver]['port'];
    }

}
