<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\About;
use App\Models\Kamar;
use App\Models\Agenda;
use App\Models\Galery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $about=About::all();
        $home = Home::all();
        $kamar = Kamar ::count();
        $count =User::count();
        $gal=Galery::count();
        $keg=Agenda::count();
        return view('client.home', compact('home', 'about', 'count', 'gal', 'kamar', 'keg'));
    }
    public function statistik(Request $request)
    {
        $count =User::count();
        $kamar=Kamar::count();
        $gal=Galery::count();
        $keg=Agenda::count();
        return view('admin.index', compact('count', 'kamar', 'gal','keg'));
    }
}