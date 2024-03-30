<?php

require_once __DIR__ . '/../vendor/autoload.php';   

use Vitafeu\EasyMVC\Router;

// Set the project root
Vitafeu\EasyMVC\Globals::setProjectRoot(__DIR__ . '/../');

// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Create an instance of the Router class
$router = new Router();

// Set the controllers namespace
$router->setControllersNamespace('App\\Controllers\\');

// Start the router
$router->start();