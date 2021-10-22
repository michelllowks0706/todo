<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
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
         
        return response()->json('Successfully registered');
    }

    public function login(Request $request)
    {  
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
           
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
         
        return response()->json('Incorrect');
    }
}
