<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyblogController extends Controller
{
   public function home(){
    return view('home');
   }
}
