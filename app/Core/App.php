<?php

namespace Tech\Core;
use Tech\Controller;
use Tech\Controller\UsersController;
class App
{
    public function run()
    {
        $request = new Request();
        $controllerName = $request->getController();
        $controller = new $controllerName();
        $method = $request->getMethod();
        $params = $request->getParams();
        $controller->$method($params);
    }

}