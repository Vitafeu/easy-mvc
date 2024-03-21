<?php

/**
 * This file is used only to test the library.
 */

$this->addRoute('GET', '/', 'IndexController', 'home');

$this->addRoute('GET', '/redirect', 'IndexController', 'testRedirect');

$this->addRoute('POST', '/test', 'IndexController', 'test');