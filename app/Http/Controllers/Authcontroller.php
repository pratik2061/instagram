<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class Authcontroller extends Controller
{
    public function indexSignup(){
        return view("signup/index");
    }
    public function indexLogin(){
        return view("login/index");
    }
    public function login(){

    } 
    public function signup(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required|unique:users',
            'password'=>'required|min:8',
            'confirm_password' =>'required|same:password'
        ]);
        $user = new Users;
        $user->Fullname=$request['name'];
        $user->email=$request['email'];
        $user->password=Hash::make($request['password']);
        $user->save();

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/')->with('success','User registered successfully!!');
        }
        return redirect()->back()->withErrors('user not registered!!');
        }
    }

