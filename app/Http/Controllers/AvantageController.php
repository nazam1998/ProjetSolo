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
        // $this->authorizeResource('admin',User::class);
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
            ['class'=>'icon-user-md','code'=>'f0f0'],
            ['class'=>'icon-exchange','code'=>'f0ec'],
            ['class'=>'icon-cloud-download','code'=>'f0ed'],
            ['class'=>'icon-cloud-upload','code'=>'f0ee'],
            ['class'=>'icon-coffee','code'=>'f0f4'],
            ['class'=>'icon-food','code'=>'f0f5'],
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
        $avantage->titre=ColorChanger::black($request->titre);
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
            ['class'=>'icon-user-md','code'=>'f0f0'],
            ['class'=>'icon-exchange','code'=>'f0ec'],
            ['class'=>'icon-cloud-download','code'=>'f0ed'],
            ['class'=>'icon-cloud-upload','code'=>'f0ee'],
            ['class'=>'icon-coffee','code'=>'f0f4'],
            ['class'=>'icon-food','code'=>'f0f5'],
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
        $avantage->icone=$request->icone;
        $avantage->titre=ColorChanger::black($request->titre);
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
