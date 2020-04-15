<?php

namespace App\Http\Controllers;
use App\Header;
use App\Testimonial;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $headers=Header::all();
        $testimonials=Testimonial::all();
        return view('welcome',compact('headers','testimonials'));
    }
    public function admin(){
        return view('admin');
    }
}
