<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function edit($id, Request $request)
    {
        $edit=About::find($id);
        return view('admin.about.edit', compact('edit'));
    }
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deskripsiabout' => 'required',
            'link' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg '
        ]);

        $about = About::find($id);
        $about->deskripsiabout = $request->deskripsiabout;
        $about->link = $request->link;


        $about->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'about' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $about['img'] = $newFileName;
            $about->update();
        }
        return redirect('/admin');
    }
}
