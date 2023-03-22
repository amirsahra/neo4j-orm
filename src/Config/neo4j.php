<?php
return [
    'default' => env('NEO4J_DRIVER', 'neo4j'),

    'connections' => [
        'neo4j' => [
            'host' => env('NEO4J_HOST', '127.0.0.1'),
            'port' => env('NEO4J_PORT', ''),
        ],
        'bolt' => [
            'host' => env('NEO4J_HOST', '127.0.0.1'),
            'port' => env('NEO4J_PORT', ''),
        ],
        'https' => [
            'host' => env('NEO4J_HOST', '127.0.0.1'),
            'port' => env('NEO4J_PORT', ''),
        ],
        'username' => 'username',
        'password' => 'password',
        /*

        $boltDriver = DriverFactory::create('bolt://neo4j:test@localhost');
        $neo4jDriver = DriverFactory::create('neo4j://core1:7777', null, $auth);
        $httpDriver = DriverFactory::create('https://localhost:7473');

        */
    ]

];
