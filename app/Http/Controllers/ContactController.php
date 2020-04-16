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
        // $this->authorizeResource('admin',User::class);
    }
    public function index(){
        $contacts= Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function edit(Contact $contact){
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
