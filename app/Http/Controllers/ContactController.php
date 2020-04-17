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
    public function index(){
        $contacts= Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function edit(Contact $contact){
        $contact->nom=ColorChanger::back($contact->nom);
        $contact->adresse=ColorChanger::back($contact->adresse);
        $contact->ville=ColorChanger::back($contact->ville);
        $contact->phone=ColorChanger::back($contact->phone);
        $contact->email=ColorChanger::back($contact->email);
        $contact->save();
        return view('admin.contact.edit',compact('contact'));
    }

    public function update(Request $request,Contact $contact){
        $contact->nom=ColorChanger::black($request->nom);
        $contact->adresse=ColorChanger::black($request->adresse);
        $contact->ville=ColorChanger::black($request->ville);
        $contact->phone=ColorChanger::black($request->phone);
        $contact->email=ColorChanger::black($request->email);
        $contact->save();
        return redirect()->route('contact.index');
    }
}
