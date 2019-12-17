<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
    case '' :
    case '/home' :
        require __DIR__ . '/views/home.php';
        break;
    case '/production.php'
    case '/production' :
        require __DIR__ . '/views/production.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}