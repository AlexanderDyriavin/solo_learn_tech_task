<?php


namespace Tech\Controller;


use Tech\Core\View;
use Tech\Model\Department;
use Tech\Model\User;
use Tech\Requests\UserRequest;

class UsersController
{
    public function index()
    {
        return View::render('users',['users'=> User::fetchAll(),
                'departments' => Department::fetchAll()]);
    }
    public function create()
    {
        $data = UserRequest::validate($_POST);
        User::create($data);
        header('Location: /users');
    }
    public function view($id)
    {
        return View::render('view',['user_data' => User::fetch($id)]);
    }
    public static function delete($id)
    {
        User::delete($id);
        header('Location: /home');
    }
}