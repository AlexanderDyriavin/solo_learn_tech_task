<?php


namespace Tech\Core;


class Request
{
    private $controller = 'Default';
    private $method = "index";
    const PATH = "Tech\\Controller\\";

    public function __construct()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $uri = array_diff($uri, ['']);
        if (isset($uri[1])) {
            $this->controller = $uri[1];
        }
        if (isset($uri[2])) {
            $this->method = $uri[2];
        }
        $this->validateRequest();
        if (!$this->validateRequest()) {
            return "404 not found";
        }
        return $this;
    }

    public function ValidateRequest()
    {
        //Todo:Replace with a try catch
        $controllerName = ucfirst($this->controller) . "Controller";

        if (!class_exists(self::PATH . $controllerName)) {
            echo "Controller not found<br>";
            return false;
        }
        if (!method_exists(self::PATH . $controllerName, $this->method)) {
            echo "Method not found<br>";
            return false;
        }
        return $this;
    }

    /**
     * @return mixed|string
     */
    public function getController()
    {
        return self::PATH.ucfirst($this->controller)."Controller";
    }

    /**
     * @param mixed|string $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed|string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }


}