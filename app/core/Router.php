<?php

namespace app\core;

/**
 * Class Router
 * @package app\core
 */
class Router
{
    /**
     * Путь Контроллера
     * @var array
     */
    protected $routes = [];
    /**
     * Controller и Action
     * @var array
     */
    protected $params = [];

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $route) {
            $this->addRoute($key, $route);
        }
    }

    /**
     * @param $route
     * @param $params
     */
    public function addRoute($route, $params)
    {
        $route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    /**
     * @return bool
     */
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match)) {
                            $match = (int)$match;
                        }
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /**
     *
     */
    public function run()
    {
        if ($this->match()) {
            $path = 'app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'] . 'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }

}