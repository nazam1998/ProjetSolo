<?php

namespace App\Http\Controllers;

use App\Mail\NewsMail;
use App\Newsletter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin')->only('index');
    }
    public function index(){
        // $this->authorize('admin',User::class);
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
        Mail::to($news->email)->send(new NewsMail($news->email));
        return redirect()->back();
    }
}
