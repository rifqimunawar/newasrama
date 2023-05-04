<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('client.team', compact('teams'));
    }

    public function list(Request $request)
    {
    if ($request->has('search')) {
    $list = Team::
    
    Where('nama','LIKE','%'.$request->search.'%')
    ->orWhere('posisi','LIKE','%'.$request->search.'%')
    ->get();
    } else {
    $list = Team::latest()->get();
    }
    return view('admin.team.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'posisi' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg '
        ]);

        $team = new Team ();
        $team->nama = $request->nama;
        $team->posisi = $request->posisi;
        $team->hp = $request->hp;
        $team->kampus = $request->kampus;
        $team->domisili = $request->domisili;
        $team->pembayaran = $request->pembayaran;


        $team->save();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'pengajar' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $team['img'] = $newFileName;
            $team->save();
        }
        return redirect('/admin/team');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit=Team::findOrFail($id);
        return view('admin.team.edit', compact('edit'));
    }

    /**  
     * Update the specified resource in storage.
     */

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'posisi' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg '
        ]);

        $team = Team::find($id);
        $team->nama = $request->nama;
        $team->posisi = $request->posisi;
        $team->hp = $request->hp;
        $team->kampus = $request->kampus;
        $team->domisili = $request->domisili;
        $team->pembayaran = $request->pembayaran;       


        $team->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'team_update' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $team['img'] = $newFileName;
            $team->update();
        }
        return redirect('/admin/team/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect('/admin/team/');
    }
}