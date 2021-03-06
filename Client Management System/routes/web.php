<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StaffController;


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

Route::get('/', function () {
    return view('welcome');
});



Route::get("/signup", [SignupController::class,'viewSignup']);
Route::post("/user/signup", [SignupController::class,'signup']);
Route::get("/login", [LoginController::class,'viewLogin']);
Route::post("/admin/login", [LoginController::class,'validation']);
Route::get("/admin/home", [AdminHomeController::class,'viewHome']);
Route::get("/admin/home/staff", [StaffController::class,'viewStaff']);
Route::get("/logout", [LogoutController::class,'viewLogout']);

// Route::get('/check', function(){
//     return DB::table('users')->get();
// });