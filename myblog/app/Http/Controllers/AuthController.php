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
    }
}
