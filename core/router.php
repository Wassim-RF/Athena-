<?php
    class Router {
        private $routes = [];

        public function add($method, $uri, $action) {
            $this->routes[] = [
                'method' => strtoupper($method),
                'uri'    => $uri,
                'action' => $action
            ];
        }

        public function dispatch() {
            $requestMethod = $_SERVER['REQUEST_METHOD'];
            $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            foreach ($this->routes as $route) {
                if ($route['method'] === $requestMethod && $route['uri'] === $requestUri) {
                    $func = $route['action'];
                    $func();
                    return;
                }
            }
            echo "404 - Page not found";
        }
    }