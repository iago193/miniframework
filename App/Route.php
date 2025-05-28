<?php

namespace App;

class Route {

    private $routes;

    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes() {
        return $this->routes;
    }

    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    public function initRoutes() {
        $routes['home'] = [
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $routes['sobre_nos'] = [
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        ];

        $this->setRoutes($routes);
    }

    public function run($url) {
        foreach($this->getRoutes() as $path => $routes) {
            if($url == $routes['route']) {
                $class = "App\\Controllers\\" . $routes['controller'];
                
                $action = $routes['action'];

                $controller = new $class;

                $controller->$action();
            }
        }
    }

    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
?>
