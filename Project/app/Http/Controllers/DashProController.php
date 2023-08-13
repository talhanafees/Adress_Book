<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashProController extends Controller
{
    public function Index(){
        return View('Dashboard.Product.Index');
    }


    public function Add(){
        return View('Dashboard.Index');
    }

    public function AddPost(){
        return View('Dashboard.Index');
    }


    public function Edit(){
        return View('Dashboard.Index');
    }

    public function EditPost(){
        return View('Dashboard.Index');
    }


    public function Delete(){
        return View('Dashboard.Index');
    }
}
