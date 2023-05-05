<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\About;
use App\Models\Kamar;
use App\Models\Agenda;
use App\Models\Galery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function list(Request $request)
    {
        $list = Home::latest()->get();
        return view('admin.home.index', compact('list'));
    }
    public function edit($id, Request $request)
    {
        $edit = Home::find($id);
        return view('admin.home.edit', compact('edit'));
    }
    public function update($id, Request $request)
    {
        $home = Home::find($id);
        $home->judul = $request->judul;
        $home->deskripsi = $request->deskripsi;
        $home->link = $request->link;
        $home->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'home' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $home['img'] = $newFileName;
            $home->update();
        }
        Alert::success('Terima Kasih', 'Halaman sudah di Update');
        return redirect('/admin/home/');
    }
}