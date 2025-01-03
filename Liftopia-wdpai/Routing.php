<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/ProfileController.php';
require_once 'src/controllers/SectionController.php';

class Routing {
    public static $routes = ['GET' => [], 'POST' => []];

    public static function get($url, $controller){
        self::$routes['GET'][$url] = $controller;
    }

    public static function post($url, $controller){
        self::$routes['POST'][$url] = $controller;
    }

    public static function run($url) {
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$method] as $route => $controller) {
            $route = preg_replace('/\//', '\\/', $route);
            $route = preg_replace('/\{[a-zA-Z0-9]+\}/', '([a-zA-Z0-9]+)', $route);
            $route = '/^' . $route . '$/';

            if (preg_match($route, $url, $params)) {
                array_shift($params);

                $object = new $controller;
                $action = explode("/", $url)[0] ?: 'index';

                call_user_func_array([$object, $action], $params);
                return;
            }
        }

        die("Wrong url!");
    }
}