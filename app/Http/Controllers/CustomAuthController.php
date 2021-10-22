<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }  

    public function register(Request $request)
    {  
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
}
