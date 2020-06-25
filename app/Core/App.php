<?php

namespace Tech\Core;
use Tech\Controller;
use Tech\Controller\ActionController;
class App
{
    public function run()
    {
        $request = new Request();
        $controllerName = $request->getController();
        $controller = new $controllerName();
        $method = $request->getMethod();
        $controller->$method();
    }

}