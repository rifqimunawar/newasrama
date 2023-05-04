<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Team;
use App\Models\About;
use App\Models\Agenda;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
    public function index(Request $request)
    {
        $about=About::all();
        $home = Home::all();
        $count =Team::count();
        $gal=Galeri::count();
        $keg=Agenda::count();
        return view('client.home', compact('home', 'about', 'count', 'gal','keg'));
    }
    

    public function list(Request $request)
    {
        $list = Home::latest()->get();
        return view('admin.home.index', compact('list'));
    }
    /**
     * Summary of edit
     * @param mixed $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id, Request $request)
    {
        $edit = Home::find($id);
        return view('admin.home.edit', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg '
        ]);

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
        // dd($request);
        return redirect('/admin/home/');
    }
}