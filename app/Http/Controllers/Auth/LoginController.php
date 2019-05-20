<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  

    use AuthenticatesUsers;


    protected function redirectTo()
    {
        if(auth()->user()->hasRole('admin'))

        {
        return '/admin';
        }

        else if (auth()->user()->hasRole('operator'))

        {

        return '/operator';
        }

        else
        {

        return '/';
        }

    }


    
   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
