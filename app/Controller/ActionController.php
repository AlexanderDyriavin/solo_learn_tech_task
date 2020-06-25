<?php


namespace Tech\Controller;


use Tech\Model\User;

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
    }
}