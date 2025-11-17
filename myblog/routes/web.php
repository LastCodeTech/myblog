<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/',[AuthController::class,'registerProcess'])->name('register.process');

