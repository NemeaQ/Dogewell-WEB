<?php

require 'app/lib/Dev.php';

use app\core\Router;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

define('OAUTH2_CLIENT_ID', '855378227957989407');
define('OAUTH2_CLIENT_SECRET', 'rsT5OU_VOkdecFaTvxS7fU6qmsoNJwtz');

$authorizeURL = 'https://discord.com/api/oauth2/authorize';
$tokenURL = 'https://discord.com/api/oauth2/token';
$apiURLBase = 'https://discord.com/api/users/@me';

$router = new Router;
$router->run();