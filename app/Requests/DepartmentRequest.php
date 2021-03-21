<?php

namespace Tech\Requests;

class DepartmentRequest
{
    public static function validate($request): ?string
    {
        if (!empty($request['department'])) {
            return $request['department'];
        }

        return null;
    }
}