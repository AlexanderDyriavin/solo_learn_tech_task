<?php

namespace Tech\Core;

use Tech\Controller;
use Tech\Controller\UsersController;

class App
{
    final public function run(Request $request): void
    {
        $controllerName = $request->getController();
        $controller = new $controllerName();
        $method = $request->getMethod();
        $params = $request->getParams();
        $controller->$method($params);
    }
}