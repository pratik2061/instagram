<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function index(){
        return view("login.index");
    }
    public function store(Request $request){
        echo "<pre>";
         print_r($request->all());
    }
}
