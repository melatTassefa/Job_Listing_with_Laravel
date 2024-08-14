<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\register_controller;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/register',[register_controller::class,'index'])->name('register');
Route::post('/register',[register_controller::class,'store']);