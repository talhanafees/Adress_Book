<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashProController extends Controller
{
    public function Index()
    {
        $products = Product::all();
        return View('Dashboard.Product.Index', compact('products'));
    }



    // ______________ Add ______________
    public function Add()
    {
        $categories = category::all();
        return View('Dashboard.Product.Add',compact('categories'));
    }

    public function AddPost(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoryId' => 'required', // Assuming 'categories' is your categories table name
        ]);
    

        $mediaName = "No-image.png";
        // ____ Upload Media ____
        $baseUrl = 'Images/Product/';

        if ($req->hasFile('image')) {
            $img = $req->file('image');
            $mediaName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path($baseUrl), $mediaName); // Use public_path() to get the correct base path
            $mediaName = '/' . $baseUrl . $mediaName;
        }
        $product = new Product();
        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->image = $mediaName;
        $product->categoryId = $req->categoryId;

        $product->save();

        return Redirect('/Dashhoard/Product/Index');
    }


    // ______________ Edit ______________
    public function Edit($id)
    {
        $product = product::find($id);
        $categories = category::all();
        return View('Dashboard.Product.Edit', compact('product','categories'));
    }

    public function EditPost(Request $req, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return Redirect::back()->with('error', 'Product not found.');
        }

        $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // ____ Upload Media ____
        $baseUrl = 'Images/product/';
        $mediaName = $product->image;

        if ($req->hasFile('image')) {
            // Delete the old image file if it exists
            if (file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            $img = $req->file('image');
            $mediaName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path($baseUrl), $mediaName); // Use public_path() to get the correct base path
            $mediaName = '/' . $baseUrl . $mediaName;
        }

        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->image = $mediaName;
        $product->categoryId = $req->categoryId;

        $product->save();

        return Redirect('/Dashhoard/Product/Index');
    }


    // ______________ Delete ______________
    public function Delete($id)
    {
        $Product = Product::find($id);
        if (file_exists(public_path($Product->image))) {
            unlink(public_path($Product->image));
        }
        $Product->delete();

        return Redirect('/Dashhoard/Product/Index');
    }
    
}
