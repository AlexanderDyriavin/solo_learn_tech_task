<?php


namespace Tech\Controller;


use Tech\Core\View;

class UsersController
{
    public function index()
    {
        return View::render('users',[]);
    }
    public function create()
    {
        var_dump($_POST);exit();
    }
}