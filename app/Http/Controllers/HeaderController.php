<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function index(){
        $headers=Header::all();
        return view('admin.header.index',compact('headers'));
    }
    public function edit($id){
        $header=Header::find($id);
        return view('admin.header.edit',compact('header'));
    }

    public function update(Request $request,$id){
        $header=Header::find($id);
        if($request->hasFile('image1')){
            if(Storage::exists($header->image1)){
                Storage::disk('public')->delete($header->image1);
            }
            $filename1=Storage::disk('public')->put('',$request->image1);
            $header->image1=$filename1;
        }
        if($request->hasFile('image2')){
            if(Storage::exists($header->image2)){
                Storage::disk('public')->delete($header->image2);
            }
            $filename2=Storage::disk('public')->put('',$request->image2);
            $header->image2=$filename2;
        }
        $header->titre=$request->titre;
        $header->description=$request->description;
        $header->save();
        return redirect()->route('header.index');
    }
}
