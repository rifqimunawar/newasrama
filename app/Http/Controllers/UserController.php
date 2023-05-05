<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $teams = User::latest()->get();
        return view('client.team', compact('teams'));
    }
}