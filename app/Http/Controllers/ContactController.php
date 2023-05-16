<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }
    
    public function list ()
    {
        $list = Contact::latest()->get();
        return view('admin.contact.index', compact('list'));
    }

    
    public function store(Request $request)
    {
        $contact = new Contact ();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->messages = $request->messages;
        $contact->save();
        Alert::success('Terima Kasih', 'Pesan Sudah Termikirim');
        return redirect('/contact')->with("Terima Kasih Atas Masukannya");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/admin/contact/');
    }

}