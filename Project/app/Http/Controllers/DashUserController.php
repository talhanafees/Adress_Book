<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashUserController extends Controller
{
    public function Index()
    {
        $users = User::all();
        return View('Dashboard.User.Index', compact('users'));
    }

}
