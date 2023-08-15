<?php

namespace App\Http\Middleware;

use App\Models\roles_users;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class UserAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (($request->path() === "Dashboard/Index")) {
            if(!$request->session()->has('user')){
                return Redirect('/');
            }

            if($request->session()->get('user')->role == 2)
            {
                return Redirect('/');
            }
        }

        if (($request->path() === "Login" || $request->path() === "SignUp")  && $request->session()->has('user')) {
            if($request->session()->get('user')->role == 1){
                return Redirect('Dashboard/Index');
            }

            if($request->session()->get('user')->role == 2)
            {
                return Redirect('/');
            }

        }

        return $next($request);
    }
}
