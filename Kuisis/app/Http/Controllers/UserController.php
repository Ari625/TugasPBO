<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration()
    {
        return view('registration',[
            'title' => 'REGISTRATION'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|max:255',
            'password' => 'required|min:8'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('succses', 'Registration succsesfull! please login');
    }
    public function login()
    {
        return view('login',[
            'title' => 'LOGIN'
        ]); 
    }

    public function autenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
            if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
            }

        return back()->with('LoginError', 'Login failled!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
