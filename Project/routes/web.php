<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashProController;
use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\DashCatController;
use App\Http\Controllers\DashUserController;
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





//_______________________________________ Client Dashboard_____________________________________

Route::get('/',[ClientController::class ,"Index"]);

// login


Route::get('/Auth/login',[RegistrationController::class , "login"]);

// Signup

Route::get('/Auth/signup',[RegistrationController::class,"signup"]);






// ________________________________________ Dashboard __________________________________
// ________________________________________ Dashboard __________________________________
Route::get('/Dashboard/Index',[DashboardController::class , "Index"]);

//___ Category ____
Route::get('/Dashhoard/Category/Index',[DashCatController::class , "Index"]);

Route::get('/Dashhoard/Category/Add',[DashCatController::class , "Add"]);
Route::post('/Dashhoard/Category/AddPost',[DashCatController::class , "AddPost"]);

Route::get('/Dashhoard/Category/Edit/{id}',[DashCatController::class , "Edit"]);
Route::post('/Dashhoard/Category/EditPost/{id}',[DashCatController::class , "EditPost"]);

Route::get('/Dashhoard/Category/Delete/{id}',[DashCatController::class , "Delete"]);


//___ Products ____
Route::get('/Dashhoard/Product/Index',[DashProController::class , "Index"]);

Route::get('/Dashhoard/Product/Add',[DashProController::class , "Add"]);
Route::post('/Dashhoard/Product/AddPost',[DashProController::class , "AddPost"]);

Route::get('/Dashhoard/Product/Edit/{id}',[DashProController::class , "Edit"]);
Route::post('/Dashhoard/Product/EditPost/{id}',[DashProController::class , "EditPost"]);

Route::get('/Dashhoard/Product/Delete/{id}',[DashProController::class , "Delete"]);


//___ Products ____
Route::get('/Dashhoard/User/Index',[DashUserController::class , "Index"]);


