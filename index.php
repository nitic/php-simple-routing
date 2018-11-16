<?php
include 'Router.php';
$request = $_SERVER['REQUEST_URI'];


$router = new Router($request);

switch ($request) {
    case '/':
            $router->get('/', 'home.php');
            break;
    case '/index.php':
            $router->get('/index.php', 'home.php');
            break;
    case '/about':     
            $router->get('/about', 'about.php');
            break;
    case '/google':     
            $router->get('/google', 'https://www.google.com/');
            break;
    default:
            require '404.php';
            break;
}