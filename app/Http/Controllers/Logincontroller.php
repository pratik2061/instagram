<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
class Logincontroller extends Controller
{
    public function index(){
        return view("login.index");
    }
    public function store(Request $request){
        
        return redirect(url("/home"));
    }
}
