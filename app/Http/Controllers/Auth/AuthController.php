<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
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

    /**
     * @param pp\Http\Requests\LoginFormRequest $request
     */
    public function login(LoginFormRequest $request){
        dd($request->all());
    }

}
