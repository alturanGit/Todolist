<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function loginAuth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        };

        return back()->withErrors([
            'email' => 'Неверный логин или пароль'
        ]);
    }
    
    public function dashboard() 
    {
        return view('todo');
    }
}
