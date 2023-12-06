<?php

require_once 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new \Bramus\Router\Router();
// Include route definitions
require_once 'routes/routes.php';
$router->run();



