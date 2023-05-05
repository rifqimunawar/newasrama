<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $teams = User::latest()->get();
        return view('client.team', compact('teams'));
    }
    
    public function list(Request $request)
    {
        if ($request->has('search')) {
        $list = User::Where('name','LIKE','%'.$request->search.'%')
        ->orWhere('pembayaran','LIKE','%'.$request->search.'%')
        ->orWhere('domisili','LIKE','%'.$request->search.'%')
        ->orWhere('kampus','LIKE','%'.$request->search.'%')
        ->where('role_id', 2)->get();
    } else {
        $list = User::latest()->where('role_id', 2)->get();
    }
        return view('admin.team.index', compact('list'));
    }
    public function dataAdmin(Request $request)
    {
        if ($request->has('search')) {
        $user = User::Where('name','LIKE','%'.$request->search.'%')
        ->orWhere('username','LIKE','%'.$request->search.'%')->where('role_id', 2)
        ->get();
    } else {
        $user = User::latest()->where('role_id', 1)->get();
    }
        return view('admin.user.index', compact('user'));
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

        $team = new User ();
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
        $edit=User::findOrFail($id)->when('kamar')->get();
        dd($edit);
        return view('admin.team.edit', compact('edit'));
    }

    /**  
     * Update the specified resource in storage.
     */

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->nama = $request->nama;
        $user->kamar = $request->kamar;
        $user->hp = $request->hp;
        $user->kampus = $request->kampus;
        $user->domisili = $request->domisili;
        $user->pembayaran = $request->pembayaran;       


        $user->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'user_update' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $user['img'] = $newFileName;
            $user->update();
        }
        return redirect('/admin/team/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = User::findOrFail($id);
        $team->delete();
        return redirect('/admin/team/');
    }
}