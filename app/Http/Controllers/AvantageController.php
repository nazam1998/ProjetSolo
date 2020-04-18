<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avantage;
use App\Helpers\ColorChanger;
use App\User;

class AvantageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avantages=Avantage::all();
        return view('admin.avantage.index',compact('avantages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons=[
            ['class'=>'fas fa-desktop','code'=>'f108','text'=>'Desktop'],
            ['class'=>'fas fa-paper-plane','code'=>'f1d8','text'=>'Paper Plane'],
            ['class'=>'fas fa-chart-bar','code'=>'f080','text'=>'Chart Bar'],
            ['class'=>'fas fa-camera','code'=>'f030','text'=>'Camera'],
            ['class'=>'fas fa-road','code'=>'f018','text'=>'Road'],
            ['class'=>'fas fa-shopping-bag','code'=>'f290','text'=>'Shopping Bag'],
        ];
        return view('admin.avantage.add',compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'icone'=>'required|string',
            'titre'=>'required|string',
        ]);
        $avantage=new Avantage();
        $avantage->icone=$request->icone;
        $avantage->titre=$request->titre;
        $avantage->save();
        return redirect()->route('avantage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Avantage $avantage
     * @return \Illuminate\Http\Response
     */
    public function show(Avantage $avantage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Avantage $avantage
     * @return \Illuminate\Http\Response
     */
    public function edit(Avantage $avantage)
    {
        
        $icons=[
            ['class'=>'fas fa-desktop','code'=>'f108','text'=>'Desktop'],
            ['class'=>'fas fa-paper-plane','code'=>'f1d8','text'=>'Paper Plane'],
            ['class'=>'fas fa-chart-bar','code'=>'f080','text'=>'Chart Bar'],
            ['class'=>'fas fa-camera','code'=>'f030','text'=>'Camera'],
            ['class'=>'fas fa-road','code'=>'f018','text'=>'Road'],
            ['class'=>'fas fa-shopping-bag','code'=>'f290','text'=>'Shopping Bag'],
        ];
        return view('admin.avantage.edit',compact('avantage','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Avantage $avantage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avantage $avantage)
    {
        $request->validate([
            'icone'=>'required|string',
            'titre'=>'required|string',
        ]);
        $avantage->icone=$request->icone;
        $avantage->titre=$request->titre;
        $avantage->save();
        return redirect()->route('avantage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Avantage $avantage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avantage $avantage)
    {
        $avantage->delete();
        return redirect()->back();
    }
}
