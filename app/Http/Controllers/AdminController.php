<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Agenda;
use App\Models\Galeri;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $count =Team::count();
        $gal=Galeri::count();
        $keg=Agenda::count();
        return view('admin.index', compact('count', 'gal','keg'));
    }
}
