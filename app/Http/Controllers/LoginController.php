<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){


        return view('auth.login');
    }
    public function store(Request $request){
        //dd($request->remember);
        $this->validate($request, [

            'email' =>  'required|email',
            'password' => 'required',


        ]);
       //if(!auth()->attempt($request->only('email','password'),$request->remember)){
        //return back()->with('status','invalid login details');
       //}

        return redirect()->route('add_job');
       }

}
