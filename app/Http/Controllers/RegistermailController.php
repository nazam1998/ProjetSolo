<?php

namespace App\Http\Controllers;

use App\Registermail;
use Illuminate\Http\Request;

class RegistermailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail=Registermail::all();
        return view('admin.mail.index',compact(('mail')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registermail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Registermail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registermail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Registermail $mail)
    {
        return view('admin.mail.edit',compact('mail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registermail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registermail $mail)
    {
        $mail->msg=$request->msg;
        $mail->save();
        return redirect()->route('mail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registermail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registermail $mail)
    {
        //
    }
}
