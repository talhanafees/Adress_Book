<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientProController;
use App\Http\Controllers\ContactUsController;
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



//_______________________________________ Auth _____________________________________
Route::get('/Login',[RegistrationController::class,'Login']);
Route::Post('/LoginPost',[RegistrationController::class,'LoginPost']);

Route::get('/SignUp',[RegistrationController::class,'Signup']);
Route::Post('/SignUpPost',[RegistrationController::class,'SignupPost']);
    
Route::get('/LogOut',[RegistrationController::class,'LogOut']);




//_______________________________________ Client Dashboard _____________________________________

//_______ home ___
Route::get('/',[ClientController::class ,"Index"]);

//_______ Products ___
Route::get('/Product/Index',[ClientProController::class ,"Index"]);
Route::get('/Product/Detail/{id}',[ClientProController::class ,"Detail"]);

Route::get('/ContactUs',[ContactUsController::class,'Index']);



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


