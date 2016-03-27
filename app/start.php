<?php

    /***********************************************************/
    /*                      Start Slim                         */
    /***********************************************************/

    require __DIR__ . '/../vendor/autoload.php';

    session_start();

    $dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
    $dotenv->load();

    // Instantiate the app
    $settings = require __DIR__ . '/settings.php';
    $app = new \Slim\App($settings);

    // Set up dependencies
    require __DIR__ . '/dependencies.php';

    // Register middleware
    require __DIR__ . '/middleware.php';

    // Register routes
    require __DIR__ . '/routes.php';

    // Register database
    require __DIR__ . '/database.php';