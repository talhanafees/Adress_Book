<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientProController extends Controller
{
    public function Index()
    {
        $products = Product::All();
        return View('Client.Product.Index',compact('products'));
    }

    public function Detail($id)
    {
        $product = Product::Find($id);
        $category = Category::find($product->categoryId);
        return View('Client.Product.Detail', Compact('product','category'));
    }
}
