<?php

return [
    /*
    |--------------------------------------------------------------------------
    | SSL Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file contains SSL-related settings for different
    | environments. In production and staging, SSL is enforced.
    |
    */

    'force_ssl' => env('FORCE_SSL', env('APP_ENV') !== 'local'),
    
    'ssl_options' => [
        'verify_peer' => env('APP_ENV') !== 'local',
        'verify_peer_name' => env('APP_ENV') !== 'local',
        'allow_self_signed' => env('APP_ENV') === 'local'
    ],
];
