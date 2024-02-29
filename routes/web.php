<?php
use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//home
route::get("/home", function () {
    return view("home.index");
});
//login
Route::get("/",[Authcontroller::class,"indexLogin"]);
Route::post("/",[Authcontroller::class,"login"]);
//signup
Route::get("/signup",[Authcontroller::class,"indexSignup"]);
Route::post("/signup",[Authcontroller::class,"signup"]);