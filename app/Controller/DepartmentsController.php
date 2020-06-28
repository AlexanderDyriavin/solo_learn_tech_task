<?php


namespace Tech\Controller;


use Tech\Core\View;
use Tech\Model\Department;
use Tech\Requests\DepartmentRequest;

class DepartmentsController
{
    public function index()
    {
        return View::render('departments',['departments' => Department::fetchAll()]);
    }
    public function fetch()
    {

    }
    public static function create()
    {
        $data = DepartmentRequest::validate($_POST);
        Department::create($data);
        header('Location: /departments');
    }

    public function delete($id)
    {
        Department::delete($id);
        $_SESSION['delete_status'] = 'department was delete';
        header('Location: /departments');
        unset($_SESSION['delete_status']);
    }
}