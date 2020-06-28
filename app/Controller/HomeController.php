<?php


namespace Tech\Controller;


use Tech\Core\View;

class HomeController
{
    public function index()
    {
        return View::render('home',[]);
    }
}