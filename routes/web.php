<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\job_post_controller;
use App\http\controllers\LoginController;
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
    //dd('Loading jobs.home');
    return view('jobs.home');
})->name('jobs.home');


Route::get('/dashboard', [job_post_controller::class, 'show_post'])->name('dashboard');
Route::get('/add', [job_post_controller::class, 'add_post'])->name('add_job');
Route::post('/add', [job_post_controller::class, 'store_post'])->name('store_job');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/register',[register_controller::class,'index'])->name('register');
Route::post('/register',[register_controller::class,'store']);

Route::get('/logout',[logout_controller::class,'store'])->name('logout');

