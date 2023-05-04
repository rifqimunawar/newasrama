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
        $user=\App\Models\User ::all();
    }
    return view('admin.user.index', compact('user'));
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
