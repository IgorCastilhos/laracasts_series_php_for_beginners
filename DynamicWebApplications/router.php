<?php

use JetBrains\PhpStorm\NoReturn;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'Controller/index.php',
    '/contact' => 'Controller/contact.php',
    '/about' => 'Controller/about.php',
    '/notes' => 'Controller/notes.php',
    '/mission' => 'Controller/mission.php'
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
