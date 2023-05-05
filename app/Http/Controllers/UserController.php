<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $user = User::Where('nama','LIKE','%'.$request->search.'%')->get();
            } 
        else {
        $user= User ::where('role_id', 1)->get();
    }
    return view('admin.user.index', compact('user'));
    }

    // data penghuni 
    public function list(Request $request)
    {
    if ($request->has('search')) {
    $list = User::
    
    Where('name','LIKE','%'.$request->search.'%')
    ->orWhere('username','LIKE','%'.$request->search.'%')
    ->get();
    } else {
    $list = User::where('role_id', 2)->get();
    }
    // dd($list);
    return view('admin.team.index', compact('list'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $user = new User ();
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('admin/user');
    }
    public function destroy($id)
    {
        $team = User::findOrFail($id);
        $team->delete();
        return redirect('/admin/user/');
    }
}