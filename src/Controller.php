<?php

namespace Vitafeu\EasyMVC;

class Controller {
    private $viewPath = __DIR__ . '/../app/Views/';

    protected function render($view, $data = []) {
        extract($data);
        
        if (file_exists($this->viewPath . $view . '.php')) {
            include $this->viewPath . $view . '.php';
        } else {
            throw new \Exception("View not found: $view");
        }
    }

    protected function redirect($path) {
        header("Location: $path");
        exit();
    }
}