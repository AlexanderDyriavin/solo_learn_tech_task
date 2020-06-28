<?php


namespace Tech\Core;


class ErrorHandler extends \Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
    public function renderError()
    {
        switch ($this->getCode()) {
            case '404':
                header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
                break;
            case '500':
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
                break;
        }
        echo View::render('error', [
            'error_code' => $this->getCode(),
            'message' => $this->getMessage()
        ]);
    }
}