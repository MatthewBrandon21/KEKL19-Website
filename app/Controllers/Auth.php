<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function forgotpassword()
    {
        return view('auth/forgotpassword');
    }

    public function resetpassword()
    {
        return view('auth/resetpassword');
    }

    public function emailactivation()
    {
        return view('auth/emailactivation');
    }
}
