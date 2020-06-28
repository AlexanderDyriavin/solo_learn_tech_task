<?php


namespace Tech\Controller;


use Tech\Core\View;

class DepartmentsController
{
    public function index()
    {
        return View::render('departments',[]);
    }
    public function fetch()
    {

    }
    public function create()
    {
        var_dump( $_POST);
    }

    public function delete($id)
    {

    }
}