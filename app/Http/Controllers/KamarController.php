<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar ::latest()
                    ->when('user')    
                    ->get();
                    dd($kamar);
        return view ('admin.kamar.index', compact('kamar'));
    }
}