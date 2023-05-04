<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function index (Request $request)
    {
        $galeris=Galeri ::latest()->get();
        return view('client.galeri', compact('galeris'));
    }
    public function list (Request $request)
    {
        $list=Galeri ::latest()->get();
        return view('admin.galeri.index', compact('list'));
    }
    public function create ()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg '
        ]);

        $galeri = new Galeri ();
        $galeri->judul = $request->judul;


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
        $edit = Galeri::find($id);
        return view('admin.galeri.edit', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg '
        ]);

        $galeri = Galeri::find($id);
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
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect('/admin/galeri/');
    }

}
