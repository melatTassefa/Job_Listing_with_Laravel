<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class register_controller extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'First_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:20|unique:users',
            'Age' => 'required|integer|min:1',
            'Gender' => 'required|in:male,female',
            'phone_number' => 'required|string|max:15',
            'Adress' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'First_name' => $request->First_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'Age' => $request->Age,
            'Gender' => $request->Gender,
            'phone_number' => $request->phone_number,
            'Adress' => $request->Adress,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Attempt to log the user in
        auth()->attempt($request->only('email', 'password'));

        // // Redirect to the dashboard or another page
        // return redirect()->route('dashboard');
    }
}


