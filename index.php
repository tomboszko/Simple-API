
<?php
// index.php

require_once 'vendor/autoload.php';

$router = new \Bramus\Router\Router();

// Include route definitions
require_once 'routes.php';

$router->run();





