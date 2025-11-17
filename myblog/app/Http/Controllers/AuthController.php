<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function register(){
        return view('auth.register');
    }
    public function registerProcess(Request $request){
        $validate=$request->validate([
            'name'=>'required|min:5|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|confirmed'
        ]);
        $user=User::create($validate);
        Auth::login($user);
        return redirect()->route('home');
    }

    //logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
    public function login(){
        return view('auth.login');
    }
    public function loginProcess(Request $request){
        $validate=$request->validate([
            'email'=>'email|required',
            'password'=>'string|required'
        ]);
        if(Auth::attempt($validate)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('message','password or email address is incorrect');
        }
    }
}
