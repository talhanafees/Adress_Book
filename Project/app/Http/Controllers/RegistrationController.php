<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class RegistrationController extends Controller
{
    public function login(){

        return view('Auth.login');

    }

    public function signup(){

        return view('Auth.signup');

    }
}
