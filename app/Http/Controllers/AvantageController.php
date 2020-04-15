<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avantage;
class AvantageController extends Controller
{
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
            ['class'=>'fas fa-desktop','code'=>'f108'],
            ['class'=>'fas fa-paper-plane','code'=>'f1d8'],
            ['class'=>'fas fa-chart-bar','code'=>'f080'],
            ['class'=>'fas fa-camera','code'=>'f030'],
            ['class'=>'fas fa-road','code'=>'f018'],
            ['class'=>'fas fa-shopping-bag','code'=>'f290'],
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
            ['class'=>'fas fa-desktop','code'=>'f108'],
            ['class'=>'fas fa-paper-plane','code'=>'f1d8'],
            ['class'=>'fas fa-chart-bar','code'=>'f080'],
            ['class'=>'fas fa-camera','code'=>'f030'],
            ['class'=>'fas fa-road','code'=>'f018'],
            ['class'=>'fas fa-shopping-bag','code'=>'f290'],
        ];
        return view('admin.avantage.edit',compact('avantage',compact('icons')));
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
