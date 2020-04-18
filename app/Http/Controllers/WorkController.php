<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\User;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
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
        $works=Work::all();
        return view('admin.work.index',compact('works'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.work.add');
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
            'image'=>'required|image'
        ]);
        $work=new Work();
        $filename=Storage::disk('public')->put('',$request->image);
        $work->image=$filename;
        $work->save();
        return redirect()->route('work.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  Work $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return Storage::download('public/'.$work->image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Work $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('admin.work.edit',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Work $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $request->validate([
            'image'=>'required|image'
        ]);
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($work->image)){
                Storage::disk('public')->delete($work->image);
            }
            $filename=Storage::disk('public')->put('',$request->image);
            $work->image=$filename;
        }
        $work->save();
        return redirect()->route('work.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Work $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        if(Storage::disk('public')->exists($work->image)){
            Storage::disk('public')->delete($work->image);
        }
        $work->delete();
        return redirect()->back();
    }
}
