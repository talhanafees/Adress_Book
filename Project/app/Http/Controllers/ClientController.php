<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Index(){

        return view('Client.Index');

    }
}
