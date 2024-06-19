<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'oa_laravel_training_one'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'oa_laravel_training_one' => [
            'driver' => 'mysql',
            'host' => env('DB_ONE_HOST', '127.0.0.1'),
            'port' => env('DB_ONE_PORT', '3306'),
            'database' => env('DB_ONE_DATABASE', 'oa_laravel_training_one'),
            'username' => env('DB_ONE_USERNAME', 'root'),
            'password' => env('DB_ONE_PASSWORD', ''),

        ],

        'oa_laravel_training_two' => [
            'driver' => 'mysql',
            'host' => env('DB_TWO_HOST', '127.0.0.1'),
            'port' => env('DB_TWO_PORT', '3306'),
            'database' => env('DB_TWO_DATABASE', 'oa_laravel_training_two'),
            'username' => env('DB_TWO_USERNAME', 'root'),
            'password' => env('DB_TWO_PASSWORD', ''),

        ],

        // Other connections if any...

        /*
        |--------------------------------------------------------------------------
        | Migration Repository Table
        |--------------------------------------------------------------------------
        |
        | This table keeps track of all the migrations that have already run for
        | your application. Using this information, we can determine which of
        | the migrations on disk haven't actually been run on the database.
        |
        */

        'migrations' => [
            'table' => 'migrations',
            'update_date_on_publish' => true,
        ],

        /*
        |--------------------------------------------------------------------------
        | Redis Databases
        |--------------------------------------------------------------------------
        |
        | Redis is an open source, fast, and advanced key-value store that also
        | provides a richer body of commands than a typical key-value system
        | such as Memcached. You may define your connection settings here.
        |
        */

        'redis' => [

            'client' => env('REDIS_CLIENT', 'phpredis'),

            'options' => [
                'cluster' => env('REDIS_CLUSTER', 'redis'),
                'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            ],

            'default' => [
                'url' => env('REDIS_URL'),
                'host' => env('REDIS_HOST', 'redis'),
                'username' => env('REDIS_USERNAME', null),
                'password' => env('REDIS_PASSWORD', null),
                'port' => env('REDIS_PORT', 6379),
                'database' => env('REDIS_DB', 0),
            ],

            'cache' => [
                'url' => env('REDIS_URL'),
                'host' => env('REDIS_HOST', 'redis'),
                'username' => env('REDIS_USERNAME', null),
                'password' => env('REDIS_PASSWORD', null),
                'port' => env('REDIS_PORT', 6379),
                'database' => env('REDIS_CACHE_DB', 1),
            ],

            'sessions' => [
                'url' => env('REDIS_URL'),
                'host' => env('REDIS_HOST', 'redis'),
                'username' => env('REDIS_USERNAME', null),
                'password' => env('REDIS_PASSWORD', null),
                'port' => env('REDIS_PORT', 6379),
                'database' => env('REDIS_SESSION_DB', 2),
            ],
        ],
    ]
];
