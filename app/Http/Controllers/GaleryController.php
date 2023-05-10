<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GaleryController extends Controller
{
    public function index (Request $request)
    {
        $galeries=Galery ::latest()->get();
        $title = 'Delete User!';
        $text = "Apakah Anda yakin ingin menghapus gambar ini?";
        confirmDelete($title, $text);
        return view('client.galery', compact('galeries', 'title', 'text'));
    }
    public function list (Request $request)
    {
        $list=Galery ::latest()->get();
        return view('admin.galeri.index', compact('list'));
    }
    public function create ()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $galeri = new Galery ();
        $galeri->judul = $request->judul;
        $galeri->img = $request->img;


        $galeri->save();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'galeri' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->move('/storage/img', $newFileName);
            $galeri['img'] = $newFileName;
            $galeri->save();
        }
        Alert::success('Terima Kasih', 'Gambar sudah di tambahkan');
        return redirect('/admin/galeri');
    }

    public function edit($id, Request $request)
    {
        $edit = Galery::find($id);
        return view('admin.galeri.edit', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $galeri = Galery::find($id);
        $galeri->judul = $request->judul;


        $galeri->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'galeri_update' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->move('/storage/img', $newFileName);
            $galeri['img'] = $newFileName;
            $galeri->update();
        }
        Alert::success('Terima Kasih', 'Gambar sudah di Update');
        return redirect('/admin/galeri/');
    }

    public function destroy($id)
    {
        $galeri = Galery::findOrFail($id);
        $galeri->delete();
        Alert::success('Terima Kasih', 'Gambar sudah di Hapus');
        return redirect('/admin/galeri/');
    }
}