<?php

namespace App\Http\Controllers;
use App\Header;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $headers=Header::all();
        return view('welcome',compact('headers'));
    }
    public function admin(){
        $headers=Header::all();
        return view('admin');
    }
}
