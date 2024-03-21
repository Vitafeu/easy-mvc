<?php

/**
 * This file is used only to test the library.
 */

$this->addRoute('GET', '/', 'IndexController', 'home');

$this->addRoute('POST', '/create', 'UserController', 'create');