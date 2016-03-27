<?php
    require __DIR__ . '/../vendor/autoload.php';

    session_start();

    $dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
    $dotenv->load();

    // Instantiate the app
    $settings = require __DIR__ . '/settings.php';
    $app = new \Slim\App($settings);