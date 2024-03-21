<?php

/**
 * This file is used only to test the library.
 */

require_once __DIR__ . '/../vendor/autoload.php';   

// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use Vitafeu\EasyMVC\Router;

// Create an instance of the Router class
$router = new Router();

// Set the controllers namespace
$router->setControllersNamespace('Vitafeu\\EasyMVC\\Controllers\\');

// Start the router
$router->start();