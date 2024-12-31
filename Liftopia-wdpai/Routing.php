<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/ForumController.php';

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
        $action = explode("/",$url)[0];

        if(!array_key_exists($action,self::$routes[$method])) {
            die("Wrong url!");
        }

        $controller = self::$routes[$method][$action];
        $object = new $controller;

        $action = $action ?: 'index';

        $object->$action();
    }
}