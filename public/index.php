<?php

require_once __DIR__ . '/../vendor/autoload.php';   

use Vitafeu\EasyMVC\Router;

// Create an instance of the Router class
$router = new Router();

// Set the controllers namespace
$router->setControllersNamespace('Vitafeu\\EasyMVC\\Controllers\\');

// Start the router
$router->start();