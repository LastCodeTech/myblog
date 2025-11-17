<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MyblogController;
use Illuminate\Support\Facades\Route;
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerProcess'])->name('register.process');
Route::get('/home',[MyblogController::class,'home'])->name('home');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/create',[MyblogController::class,'create'])->name('create');

