<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\job_post_controller;
use App\http\controllers\login_controller;
use App\http\controllers\register_controller;
use App\http\controllers\logout_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function () {
    return view('layouts.app');
})->name('layouts.app');;
Route::get('/add', [job_post_controller::class, 'add_post'])->name('add_job');



Route::get('/login',[login_controller::class,'index'])->name('login');
Route::post('/login',[login_controller::class,'store']);

Route::get('/register',[register_controller::class,'index'])->name('register');
Route::post('/register',[register_controller::class,'store']);

Route::post('/logout',[logout_controller::class,'store'])->name('logout');

