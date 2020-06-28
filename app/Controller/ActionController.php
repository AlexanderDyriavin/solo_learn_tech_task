<?php


namespace Tech\Controller;


use Tech\Model\User;
use  Tech\Core\View;

class ActionController
{
    public function action()
    {
        echo "Action Index";
    }
    public function move()
    {
        User::sayHi();
        echo "Move method called";
        $template = View::render("move");
    }
}