<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::with('users')->get();
        return view('admin.kamar.index', compact('kamar'));
    }
    public function create()
    {
        return view('admin.kamar.create');
    }

    public function store(Request $request)
    {
        $kamar = new Kamar ();
        $kamar->kamar = $request->kamar;
        $kamar->save();
        Alert::success('Terima Kasih', 'Kamar Baru sudah di tambahkan');
        return redirect('/admin/kamar');
    }
    
    public function edit($id, Request $request)
    {
        $edit = kamar::find($id);
        return view('admin.kamar.edit', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $galeri = Kamar::find($id);
        $galeri->kamar = $request->kamar;
        $galeri->update();
        Alert::success('Terima Kasih', 'Kamar sudah di Update');
        return redirect('/admin/kamar/');
    }

    public function destroy($id)
    {
        $galeri = Kamar::findOrFail($id);
        $galeri->delete();
        Alert::success('Terima Kasih', 'Kamar sudah di Hapus');
        return redirect('/admin/kamar/');
    }
    public function show($id)
    {
        $kamar = Kamar::with('users')->find($id);
        return view('admin.kamar.show', compact('kamar'));
    }
}