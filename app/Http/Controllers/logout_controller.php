<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class logout_controller extends Controller
{
    public function store(){

        auth()->logout();

        return view('layouts.app');

        }
}
