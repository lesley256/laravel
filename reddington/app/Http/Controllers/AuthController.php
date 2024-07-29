<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $piss = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('web')->attempt($piss)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
