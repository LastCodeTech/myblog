<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MyblogController extends Controller
{
   public function create(){
      $category=Category::all();
      return view('create',compact('category'));
   }
   public function home(){
      return view('home');
   }
   // public function store(Request $request){
   //    $validate=$request->validate([
   //       'title'=>'required|min:10|string',
   //       'category_'=>'required|'
   //    ])
   // }
}
