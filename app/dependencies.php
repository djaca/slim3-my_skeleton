<?php

    /***********************************************************/
    /*                  DIC configuration                      */
    /***********************************************************/

    $container = $app->getContainer();

    /***********************************************************/
    /* Service providers
    /***********************************************************/

    // Twig
    $container['view'] = function ($c) {
        $settings = $c->get('settings');
        $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

        // Add extensions
        $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
        $view->addExtension(new Twig_Extension_Debug());
        $view->addExtension(new Twig_Extensions_Extension_Text());

        return $view;
    };

    // Flash messages
    $container['flash'] = function () {
        return new Slim\Flash\Messages;
    };

    // Database Eloquent
    $container['db'] = function() {
        return new Illuminate\Database\Capsule\Manager;
    };

    /***********************************************************/
    /* Service factories
    /***********************************************************/

    // Monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings');
        $logger = new Monolog\Logger($settings['logger']['name']);
        $logger->pushProcessor(new Monolog\Processor\UidProcessor());
        $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
        return $logger;
    };