<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyblogController extends Controller
{
   public function create(){
      return view('create');
   }
}
