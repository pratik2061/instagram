<?php

use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Signupcontroller;
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
// Login    
Route::get('/',[Logincontroller::class,'index'] );
Route::post('/',[Logincontroller::class,'store'] );

//signup
Route::get('/signup',[Signupcontroller::class,'index'] );
Route::post('/signup',[Signupcontroller::class,'store'] );