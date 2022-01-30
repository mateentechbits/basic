<?php

use App\Http\Controllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class,'index']);
Route::get('/about',[ContactController::class,'about']);
Route::get('/contact-us-on-gmail',[ContactController::class,'contact'])->name('contact');
Route::get('/register',[ContactController::class,'register']);
Route::get('/dashboard',[ContactController::class,'dashboard']);


