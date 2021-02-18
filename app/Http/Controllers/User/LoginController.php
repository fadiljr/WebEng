<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Domain\Service\User\UserService;
use Session;
use Auth;

class LoginController
{
    public function login(Request $request)
    {
    	$login = new UserService();
    	$result = $login->loginService($request);
		// dd($result);
		if($result){
			return redirect('welcome');
		}else{
            return view('login');
        }	
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}

