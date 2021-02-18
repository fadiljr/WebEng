<?php

namespace App\DAO\User;

use Illuminate\Http\Request;
use App\Domain\Models\User\User;
use Illuminate\Support\Facades\Auth;

class UserDAO
{
    public function checkUser(Request $request)
    {
    	
        $credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials)) {
            return true;
        }else{
            return false;
        }

    }
}
