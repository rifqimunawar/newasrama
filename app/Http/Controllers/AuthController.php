<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

/**
 * Summary of AuthController
 */
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Summary of auth
     * @param Request $request
     * @return void
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        return redirect()->back()->with('error', 'Email atau Password Salah!!!');
    }

    /**
 * Log the user out of the application.
 */
public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

}
