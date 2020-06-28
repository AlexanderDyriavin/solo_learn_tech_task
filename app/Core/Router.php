<?php


namespace Tech\Core;


class Router
{
    public static $urlQuery = [];

    public static function run()
    {
        $routes = require APP_ROOT_PATH . '/routes.php';
        $urlParts = parse_url($_SERVER['REQUEST_URI']);
        parse_str($urlParts['query'] ?? false, self::$urlQuery);

        $path = $urlParts['path'];
        $path = $path === '/' ? $path : rtrim($path, '/');

        if (array_key_exists($path, $routes)) {
            $action = $routes[$path]['action'];
            $controller = 'app\controllers\\' . $routes[$path]['controller'];
            if (!in_array($action, get_class_methods($controller), true)) {
                throw new ErrorHandler('Something went wrong', 500);
            }
            (new $controller())->$action();
        } else {
            throw new ErrorHandler('Page not found', 404);
        }
    }
}