<?php
return [
    'default' => env('NEO4J_DRIVER', 'neo4j'),

    'drivers' => [
        'neo4j' => [
            'host' => env('NEO4J_HOST', 'neo4j://core1'),
            'port' => env('NEO4J_PORT', '7777'),
        ],
        'bolt' => [
            'host' => env('NEO4J_HOST', '127.0.0.1'),
            'port' => env('NEO4J_PORT', ''),
        ],
        'https' => [
            'host' => env('NEO4J_HOST', '127.0.0.1'),
            'port' => env('NEO4J_PORT', ''),
        ],

        /*

        $boltDriver = DriverFactory::create('bolt://neo4j:test@localhost');
        $neo4jDriver = DriverFactory::create('neo4j://core1:7777', null, $auth);
        $httpDriver = DriverFactory::create('https://localhost:7473');

        */
    ],

    'username' => env('NEO4J_USERNAME', 'username'),
    'password' => env('NEO4J_PASSWORD', 'password'),
];
