<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->text = $request->text;
        $contact->save();
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
