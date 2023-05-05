<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function edit($id, Request $request)
    {
        $edit=About::find($id);
        return view('admin.about.edit', compact('edit'));
    }
    public function update($id, Request $request)
    {
        $about = About::find($id);
        $about->deskripsi = $request->deskripsi;
        $about->link = $request->link;


        $about->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'about' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $about['img'] = $newFileName;
            $about->update();
        }
        Alert::success('Terima Kasih', 'Halaman sudah di edit');
        return redirect('/admin');
    }
}