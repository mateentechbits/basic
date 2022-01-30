<?php

use App\Http\Controllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about',[]);
Route::get('/contact',[ContactController::class,'index']);
