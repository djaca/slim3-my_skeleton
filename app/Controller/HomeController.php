<?php

    namespace App\Controller;

    use Slim\Views\Twig;
    use Psr\Log\LoggerInterface;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    use Illuminate\Database\Capsule\Manager as Capsule;

    class HomeController
    {
        private $_view;
        private $_logger;
        private $_db;

        public function __construct(Twig $view, LoggerInterface $logger, Capsule $db)
        {
            $this->_view = $view;
            $this->_logger = $logger;
            $this->_db = $db;
        }

        public function index(Request $request, Response $response, $args)
        {
            $this->_view->render($response, 'home.twig');
            return $response;
        }
    }