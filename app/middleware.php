<?php

    /***********************************************************/
    /*                      Middleware                         */
    /***********************************************************/

    use Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware;

    $app->add(new WhoopsMiddleware);