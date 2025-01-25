<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Environment-Specific Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file contains settings that vary between environments.
    |
    */

    'settings' => [
        'local' => [
            'debug' => true,
            'cache_ttl' => 0,
            'session_secure' => false,
            'cors' => [
                'allowed_origins' => ['http://localhost:8000'],
                'allowed_methods' => ['*'],
                'allowed_headers' => ['*'],
            ],
        ],
        'staging' => [
            'debug' => false,
            'cache_ttl' => 3600,
            'session_secure' => true,
            'cors' => [
                'allowed_origins' => ['https://staging.manaablehr.com'],
                'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
                'allowed_headers' => ['X-Requested-With', 'Content-Type', 'Authorization'],
            ],
        ],
        'production' => [
            'debug' => false,
            'cache_ttl' => 7200,
            'session_secure' => true,
            'cors' => [
                'allowed_origins' => ['https://manaablehr.com'],
                'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
                'allowed_headers' => ['X-Requested-With', 'Content-Type', 'Authorization'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment Detection
    |--------------------------------------------------------------------------
    */
    'current' => env('APP_ENV', 'local'),
];
