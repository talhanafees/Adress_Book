<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashProController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




// ________________________________________ Clients __________________________________
// Route::get('/',[ClientController::class , "Index"]);



// ________________________________________ Dashboard __________________________________
Route::get('/Dashobard/Index',[DashboardController::class , "Index"]);

//___ Products ____
Route::get('/Dashobard/Product/Index',[DashProController::class , "Index"]);

Route::get('/Dashobard/Product/Addd',[DashProController::class , "Add"]);
Route::get('/Dashobard/Product/AddPost',[DashProController::class , "AddPost"]);



// Route::get('/Dashobard/Product/Index',[DashProController::class , "Index"]);



//___ Category ____

