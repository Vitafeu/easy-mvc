<?php

namespace Vitafeu\EasyMVC;

class Controller {
    private $viewPath = __DIR__ . '/Views/';

    protected function render($view, $data = []) {
        extract($data);
        
        if (file_exists($this->viewPath . $view . '.php')) {
            include $this->viewPath . $view . '.php';
        } else {
            throw new \Exception("View not found: $view");
        }
    }
}