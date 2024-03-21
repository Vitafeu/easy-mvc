<?php

namespace Vitafeu\EasyMVC;

class Router {
    protected $controllersNamespace = '';
    protected $routes = [];

    public function start() {
        $this->loadRoutes();
        $this->handleRequest();
    }

    public function loadRoutes() {
        $path = __DIR__ . '/../routes/web.php';

        if (file_exists($path)) {
            include $path;
        } else {
            throw new \Exception("Routes file not found: $path");
        }
    }

    public function addRoute($method, $path, $controller, $action) {
        $this->routes[$method][$path] = ['controller' => $this->controllersNamespace . $controller, 'action' => $action];
    }

    public function dispatch($method, $uri) {
        // GET
        $urlParts = explode('?', $uri);
        $uri = $urlParts[0];
        $queryParams = isset($urlParts[1]) ? $urlParts[1] : '';

        if (array_key_exists($method, $this->routes) && array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            // GET Parameters
            $params = [];
            parse_str($queryParams, $params);

            // POST Parameters
            if ($method === 'POST') {
                $params = array_merge($_POST, $params);
            }

            $controllerInstance = new $controller();
            if (method_exists($controllerInstance, $action)) {
                $controllerInstance->$action($params);
            } else {
                throw new \Exception("Action not found for URI: $uri");
            }
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }

    public function handleRequest() {
        try {
            $this->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function setControllersNamespace($namespace) {
        $this->controllersNamespace = $namespace;
    }
}