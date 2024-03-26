<?php

/**
 * This file is used only to test the library.
 */

$this->addRoute('GET', '/', 'IndexController', 'home');

$this->addRoute('POST', '/create', 'UserController', 'create');

$this->addRoute('GET', '/edit', 'UserController', 'edit');
$this->addRoute('POST', '/edit', 'UserController', 'update');

$this->addRoute('GET', '/delete', 'UserController', 'delete');