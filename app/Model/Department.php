<?php


namespace Tech\Model;

use Tech\Core\Database;
use Tech\Core\ErrorHandler;
use Tech\Core\View;

class Department extends Database
{
    public static function create($name)
    {
        $query = self::run('INSERT INTO `departments`(`name`) VALUES (?)', [$name]);

    }

    public static function update($id)
    {
        //Todo: Тут можно было бы написать фукцию для апдейта отдела
    }
    public static function delete($id)
    {
        self::run('Delete FROM `departments` WHERE `department_id` = ? ', [$id]);

    }

    public static function fetchAll()
    {
        $all = self::run('SELECT * FROM `departments` ORDER BY department_id ASC')->fetchAll();
        return $all;
    }
}