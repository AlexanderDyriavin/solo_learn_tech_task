<?php


namespace Tech\Controller;


use Tech\Core\View;

class DefaultController
{
    public function index()
    {
         return View::render('index', ['name'=> 'Alexander']);
    }
}