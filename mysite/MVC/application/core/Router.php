<?php

namespace application\core;

class Router
{

    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run()
    {
        if ($this->match()) {
            $file_path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($file_path)) {
                $action = $this->params['action'].'action';
                if (method_exists($file_path, $action)) {
                    $controller = new $file_path;
                    $controller->$action();
                } else {
                    echo 'Не найден экшен: '.$action;
                }
            } else {
                echo 'Не найден контроллер: '.$file_path;
            }
        } else {
            echo 'Маршрут не найден';
        }
    }

}
