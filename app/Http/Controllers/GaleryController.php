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
            $request->file('img')->storeAs('/img', $newFileName);
            $galeri['img'] = $newFileName;
            $galeri->save();
        }
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
            $request->file('img')->storeAs('/img', $newFileName);
            $galeri['img'] = $newFileName;
            $galeri->update();
        }
        return redirect('/admin/galeri/');
    }

    public function destroy($id)
    {
        $galeri = Galery::findOrFail($id);
        $galeri->delete();
        return redirect('/admin/galeri/');
    }
}