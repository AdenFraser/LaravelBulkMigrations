<?php

/*
|--------------------------------------------------------------------------
| Bulk Migrations 
|--------------------------------------------------------------------------
|
| Below you will find two sub-arrays where you can define your 
| migration providers. These will by looped through when you run the
| `php artisan migrate:bulk` command, so that you can tag this command
| onto your deployments and ensure that all migrations from all packages
| are checked and run if required.
|
*/
return array(

    /*
    |--------------------------------------------------------------------------
    | Path Based Migrations
    |--------------------------------------------------------------------------
    |
    | Here you can define a list of paths to check for migrations:
    |
    */
    'path' => array(
        
        /* 
         * Examples:
        'database/migrations/foo',
        'database/migrations/bar',
        'storage/base-migrations',
        'database/search-migrations'
        */

    ),

    /*
    |--------------------------------------------------------------------------
    | Path Based Migrations
    |--------------------------------------------------------------------------
    |
    | Here you can define a list of packages to check for migrations:
    |
    */
    'package' => array(
        
        /* 
         * Examples:
        'coandacms/coanda-core',
        'coandacms/coanda-web-forms',
        'coandacms/content-sign-off',
        */

    ),

);