<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Header;
use App\Testimonial;
use App\Work;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $headers=Header::all();
        $works=Work::all();
        $contact=Contact::all();
        $testimonials=Testimonial::all();
        return view('welcome',compact('headers','testimonials','works','contact'));
    }
    public function admin(){
        return view('admin');
    }
}
