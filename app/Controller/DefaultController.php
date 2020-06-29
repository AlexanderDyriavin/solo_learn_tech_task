<?php


namespace Tech\Controller;


use Tech\Core\View;
use Tech\Model\User;

class DefaultController
{
    public function index()
    {

         return View::render('home');
    }
}