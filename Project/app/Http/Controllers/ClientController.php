<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Index(){

        $products = Product::All();
        return view('Client.Index',compact('products'));
    }
}
