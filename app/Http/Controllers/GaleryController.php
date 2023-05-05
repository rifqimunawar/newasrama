<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index (Request $request)
    {
        $galeries=Galery ::latest()->get();
        return view('client.galery', compact('galeries'));
    }
}