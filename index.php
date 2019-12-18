<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case '' :
        require __DIR__ . '/views/home.php';
        break;
    case '/home' :
        require __DIR__ . '/views/home.php';
        break;
    case '/production' :
        require __DIR__ . '/views/production.php';
        break;
    case '/database':
        require __DIR__ . '/database.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}