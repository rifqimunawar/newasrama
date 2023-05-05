<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

public function register()
{
    return view('auth.register');
}

public function store(Request $request)
{
    $user = new User ();
    $user->name = $request->name;
    // $user->kamar_id = $request->kamar_id;
    // $user->role_id = $request->role_id;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    return redirect('/login');
}

}