<?php

use fullBody\Mvc\controller\AppController;

require_once __DIR__ . '/../vendor/autoload.php';

/* if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    $appController = new AppController();
    $appController->processaRequisicao(); 
    //require_once __DIR__ . '/../view/home.php';

} else if (array_key_exists('PATH_INFO', $_SERVER) && $_SERVER['PATH_INFO'] === '/login') {
    if( $_SERVER['REQUEST_METHOD'] === 'GET') {
        $appController = new AppController();
    }

} else {
      //http_response_code(404);
} */

$routes = require_once __DIR__ . '/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$controllerClass = $routes["$httpMethod|$pathInfo"];

$controller = new $controllerClass();
$controller->processaRequisicao();