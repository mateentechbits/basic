<?php

use App\Http\Controllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    echo "<h1>Well come to home page</h1>";
});
// check if the user is 
Route::get('/about',function(){
    return view('about');
})->middleware('check');

Route::get('/contact',[ContactController::class,'index']);