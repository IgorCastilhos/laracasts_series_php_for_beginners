<?php

use JetBrains\PhpStorm\NoReturn;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
    '/mission' => 'controllers/mission.php'
];

function routeToController($uri, $routes): void
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

#[NoReturn] function abort($code = 404): void
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
