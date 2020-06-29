<?php


namespace Tech\Requests;


class UserRequest
{
    public static function validate($request)
    {
        if (empty($request) || !isset($request)){
            return null;
        }
        return $data = [
            'email'=> $request['email'],
            'username' => $request['username'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'comments' => $request['comments'],
            'department' => $request['department']
        ];
    }
}