<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index (Request $request)
    {
        $senin = Agenda::where('hari', 'senin')->get();
        $selasa = Agenda::where('hari', 'selasa')->get();
        $rabu = Agenda::where('hari', 'rabu')->get();
        $kamis = Agenda::where('hari', 'kamis')->get();
        $jumat = Agenda::where('hari', 'jumat')->get();
        return view('client.agenda', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat'));
    }
}