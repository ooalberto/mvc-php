<?php

namespace App;

class Route
{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/',
            'controller' => "IndexController",
            'action' => 'index'
        );

        $routes['contact'] = array(
            'route' => '/contact',
            'controller' => "IndexController",
            'action' => 'contact'
        );
        $this->setRoutes($routes);
    }

    public function run($url)
    {
        array_walk($this->routes, function ($route) use ($url) {
            if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);
                // $class  ='teste';
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    public function getUrl()
    {
        # return 'testeasffs';
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
