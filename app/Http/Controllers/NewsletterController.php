<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        $newsletters =Newsletter::all();
        return view('admin.news.index',compact('newsletters'));
    }
    public function subscribe(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users'
        ]);
        $news=new Newsletter();
        $news->email=$request->email;
        $news->save();
        return redirect()->back();
    }
}
