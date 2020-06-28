<?php


namespace Tech\Requests;


class DepartmentRequest
{
    public static function validate($request)
    {
        if (!empty($request['department'])){
            return $request['department'];
        } else {
            return null;
        }
    }
}