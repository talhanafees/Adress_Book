<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashCatController extends Controller
{
    public function Index()
    {
        $categories = category::all();
        return View('Dashboard.Category.Index', compact('categories'));
    }


    // ______________ Add ______________
    public function Add()
    {
        return View('Dashboard.Category.Add');
    }

    public function AddPost(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mediaName = "No-image.png";
        // ____ Upload Media ____
        $baseUrl = 'Images/Category/';

        if ($req->hasFile('image')) {
            // Delete the old image file if it exists
            $img = $req->file('image');
            $mediaName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path($baseUrl), $mediaName); // Use public_path() to get the correct base path
            $mediaName = '/' . $baseUrl . $mediaName;
        }
        $category = new Category();
        $category->name = $req->name;
        $category->description = $req->description;
        $category->image = $mediaName;

        $category->save();

        return Redirect('/Dashhoard/Category/Index');
    }


    // ______________ Edit ______________
    public function Edit($id)
    {
        $category = category::find($id);
        return View('Dashboard.Category.Edit', compact('category'));
    }

    public function EditPost(Request $req, $id)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = category::find($id);

        if (!$category) {
            return Redirect::back()->with('error', 'Product not found.');
        }

        $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // ____ Upload Media ____
        $baseUrl = 'Images/Category/';
        $mediaName = $category->image;

        if ($req->hasFile('image')) {
            // Delete the old image file if it exists
            if (file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }
            $img = $req->file('image');
            $mediaName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path($baseUrl), $mediaName); // Use public_path() to get the correct base path
            $mediaName = '/' . $baseUrl . $mediaName;
        }

        $category->name = $req->name;
        $category->description = $req->description;
        $category->image =  $mediaName;

        $category->save();

        return Redirect('/Dashhoard/Category/Index');
    }


    // ______________ Delete ______________
    public function Delete($id)
    {
        $category = category::find($id);
        if (file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }
        $category->delete();

        return Redirect('/Dashhoard/Category/Index');
    }
}
