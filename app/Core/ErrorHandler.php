<?php

namespace Tech\Core;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class ErrorHandler extends Exception
{
    public function __construct(string $message, int $code)
    {
        parent::__construct($message, $code);
    }

    public function renderError(): Response
    {
        $response = new Response('Content', null, ['content-type' => 'text/html']);

        switch ($this->getCode()) {
            case Response::HTTP_NOT_FOUND:
                $response->setStatusCode(Response::HTTP_NOT_FOUND);
                break;
            case Response::HTTP_UNPROCESSABLE_ENTITY:
                $response->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
                break;
            case Response::HTTP_INTERNAL_SERVER_ERROR:
                $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
                break;
        }
    }

    private function errorView(): View
    {
        //TODO implement
    }
}