<?php

namespace Tech\Requests;

use Request;

class UserRequest
{
    public static function validate(Request $request): ?array
    {
        if ($request === null || !isset($request)) {
            return null;
        }

        return [
            'email' => $request['email'],
            'username' => $request['username'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'comments' => $request['comments'],
            'department' => $request['department'],
        ];
    }
}