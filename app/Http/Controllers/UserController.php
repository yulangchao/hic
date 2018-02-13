<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function postLogin()
    {
        if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
            return Redirect::away('/');

        } else {

            return Redirect::away('/')->with('error', 'Please check your password & email');
        }
    }

    public function getLogin()
    {
        return Redirect::away('/');
    }

    public function getRegister()
    {
        return Redirect::away('/');
    }

    public function postRegister()
    {
        return Redirect::away('/');
    }



    public function getLogout()
    {
        Auth::logout();

        return Redirect::away('/');
    }
}
