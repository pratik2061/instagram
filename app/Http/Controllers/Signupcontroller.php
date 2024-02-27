<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Hash;
use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function index(){
        return view("signup/index");
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=>'required|min:8',
            'confirm_password' =>'required|same:password'
        ]);
        $user = new Users;
        $user->Fullname=$request['name'];
        $user->email=$request['email'];
        $user->password=Hash::make($request['password']);
        $user->save();
        return redirect('/')->with('success','User created successfully!!');
    }
}
