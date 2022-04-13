<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
    * @return View
    */
    public function show_login(){
        return View('login.login_form');
    }

    public function login(){
        return View('login.login_form');
    }

}
