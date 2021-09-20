<?php

session_start();
require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];

$routes = [
    '/index' => ['controller' => 'postController'
                , 'method' => 'index'],
    '/post' => ['controller' => 'postController'
                , 'method' => 'show'],
    '/login' => ['controller' => 'loginController'
                ,'method' => 'login'],
    '/dashboard' => ['controller' => 'loginController'
                    , 'method' => 'dashboard']
];

if(isset($routes[$pathInfo])) {
    $route = $routes[$pathInfo];
    $controller = $container->make($route['controller']);
    $method = $route['method'];
    
    $controller->$method();
}


?>