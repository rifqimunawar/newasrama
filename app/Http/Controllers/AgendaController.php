<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function list(Request $request)
    {
        $agenda=Agenda::all();
        return view('admin.agenda.index', compact('agenda'));
    }

    public function create(Request $request)
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $agenda=new Agenda();
        $agenda->hari = $request->hari;
        $agenda->waktu = $request->waktu;
        $agenda->kegiatan = $request->kegiatan;
        $agenda->save();
        Alert::success('Terima Kasih', 'Agenda Berhasil Ditambahkan');
        return redirect('admin/agenda');
    }

    public function edit($id)
    {
        $edit=Agenda ::findOrFail($id);
        return view('admin.agenda.edit', compact('edit'));
    }

    public function update ( $id, Request $request)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->hari = $request->hari;
        $agenda->waktu = $request->waktu;
        $agenda->kegiatan = $request->kegiatan;
        $agenda->update();
        Alert::success('Terima Kasih', 'Agenda Berhasil Diubah');
        return redirect('admin/agenda');
    }

    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        Alert::success('Terima Kasih', 'Agenda Berhasil Dihapus');
        return redirect('/admin/agenda/');
    }
}