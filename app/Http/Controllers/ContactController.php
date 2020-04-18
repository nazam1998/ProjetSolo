<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Helpers\ColorChanger;
use App\User;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }
    public function edit(Contact $contact)
    {

        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'nom' => 'required|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
        ]);
        $contact->nom = $request->nom;
        $contact->adresse = $request->adresse;
        $contact->ville = $request->ville;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->route('contact.index');
    }
}
