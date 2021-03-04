<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if ($request->remember_me) {
            $rememberMe = true;
        } else {
            $rememberMe = false;
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors(["credential" => "invalid credentials!"]);
    }

    public function logout() {

    }
}
