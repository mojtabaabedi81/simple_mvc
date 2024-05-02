<?php

use Controllers\HomeController;
use src\Routes\Router;

$router = new Router();
$router->get('/',HomeController::class,'index');
$router->get('/login',HomeController::class,'login');
$router->dispatch();
