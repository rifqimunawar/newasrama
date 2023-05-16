<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kamar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $teams = User::latest()->where('role_id', 2)->get();
        $kamar = Kamar::with('users')->get();
        // $kamarid = Kamar::with('users')->find($id);
        return view('client.team', compact('teams', 'kamar'));
    }
    public function kamaruser($id, Request $request)
    {
        $kamaruser = Kamar::with(['users' => function ($query) {
            $query->where('role_id', 2);
            }])->find($id);
        
        return view('client.detailteam', compact('kamaruser'));
    }    
    
    public function list(Request $request)
    {
        if ($request->has('search')) {
        $list = User::Where('name','LIKE','%'.$request->search.'%')
        ->orWhere('pembayaran','LIKE','%'.$request->search.'%')
        ->orWhere('kamar','LIKE','%'.$request->search.'%')
        ->orWhere('domisili','LIKE','%'.$request->search.'%')
        ->orWhere('kampus','LIKE','%'.$request->search.'%')
        ->where('role_id', 2)->get();
    } else {
        $list = User::latest()->where('role_id', 2)->when('kamar')->get();
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
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $team = new User ();
        
        $team->name = $request->name;
        $team->email = $request->email;
        $team->role_id = $request->role_id;
        $team->password = bcrypt( $request->password);
        
        return redirect('/admin/dataAdmin');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit=User::findOrFail($id);
        $kamar = Kamar::all();
        // dd($edit);
        return view('admin.team.edit', compact('edit', 'kamar'));
    }

    /**  
     * Update the specified resource in storage.
     */

     public function update($id, Request $request)
     {
     $user = User::find($id);
     $user->name = $request->input('name');
     $user->kamar_id = $request->input('kamar_id');
     $user->hp = $request->input('hp');
     $user->kampus = $request->input('kampus');
     $user->domisili = $request->input('domisili');
     $user->pembayaran = $request->input('pembayaran');

     if ($request->hasFile('img')) {
        $extension = $request->file('img')->getClientOriginalExtension();
        $newFileName = 'user_update' . '_' . $request->input('name') . '-' . now()->timestamp . '.' . $extension;
        $request->file('img')->storeAs('img', $newFileName);
        $user->img = $newFileName;
    }
    
    $user->save();
    
    Alert::success('Terima Kasih', 'Data Penghuni Sudah Diupdate');
    return redirect('/admin/penghuni/');
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