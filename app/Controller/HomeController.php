<?php


namespace Tech\Controller;


use Tech\Core\View;
use Tech\Model\User;

class HomeController
{
    public function index()
    {
        return View::render('home',['users' => User::fetchAllData()]);
    }
}