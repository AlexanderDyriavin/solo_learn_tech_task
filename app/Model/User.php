<?php


namespace Tech\Model;

use Tech\Core\Database;

class User extends Database
{
    public static function create($data)
    {
        self::run("INSERT INTO `users`(`name`,`email`,`address`,`phone`,`comments`,`department`) 
        VALUES (?,?,?,?,?,?)", [$data['username'], $data['email'], $data['address'], $data['phone'], $data['comments'], (int)$data['department']]);

    }

    public static function fetchAll()
    {
        return self::run("SELECT * FROM `users` ORDER BY `user_id` ASC ")->fetchAll();
    }

    public static function fetchAllData()
    {
        return self::run("SELECT `user_id`, 
       `name` AS `user_name`, 
       `email`, 
       `address`, 
       `phone`, 
       `comments`, 
       `department`,
       `deparment_name`
FROM   `users` 
       INNER JOIN (SELECT `name` AS `deparment_name`, 
                          `department_id` 
                   FROM   `departments`) AS `dpt` 
               ON `users`.`department` = `dpt`.`department_id`")->fetchAll();
    }

    public static function fetch($id)
    {
        return self::run("SELECT `user_id`, 
       `name` AS `user_name`, 
       `email`, 
       `address`, 
       `phone`, 
       `comments`, 
       `department`,
       `deparment_name`
FROM   `users` 
       INNER JOIN (SELECT `name` AS `deparment_name`, 
                          `department_id` 
                   FROM   `departments`) AS `dpt` 
               ON `users`.`department` = `dpt`.`department_id` 
               WHERE `users`.user_id = ?",[$id])->fetchAll();
    }

    public static function delete($id)
    {
        self::run('DELETE FROM `users` WHERE `user_id` = ? ', [$id]);
    }
}
