<?php

namespace App\Domain\Service\User;

use Illuminate\Http\Request;
use App\DAO\User\UserDAO;

class UserService
{
    public function loginService(Request $request)
    {

    	$check = new UserDAO();
    	$result = $check->checkUser($request);

    	return $result;

    }
}
