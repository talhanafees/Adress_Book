<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
    public function Login(){

        return view('Auth.login');

    }
    public function LoginPost(Request $req){

        $user= User::Where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password , $user->password)){
            $match = "UserNot Match";
            return Redirect("/Login");
        }
        
        //___ 2. Add session  ____
        $req->session()->put('user',$user);

        if($user->role == 1){
            return Redirect("/Dashboard/Index");
        }
        if($user->role == 2){
            return Redirect("/");
        }
        
        return Redirect("/");
    }




    public function Signup(){
        return view('Auth.signup');
    }

    public function SignupPost(Request $req)
    {
        $req->validate([
            'name' => 'required|max:20|min:3',
            'email' => 'required|email|unique:users', //User Model
            'password' => 'required|min:8',
        ]);

        //_________ hash password _________
        $hashedPassword = Hash::make($req->password);
        
        //_________ Adding Account _________
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashedPassword;
        $user->role = 2;
        $user->Save();

        //_________ checking Account _________
        $user= User::Where(['email'=>$req->email])->first();
        $req->session()->put('user',$user);
        
        return Redirect('/');
    }



    public function LogOut(){
        Session::forget('user');
        return redirect('/');

    }

}
