<?php

namespace App\Http\Controllers;

use App\Helpers\ColorChanger;
use Illuminate\Http\Request;
use App\Testimonial;
use App\User;
use Illuminate\Support\Facades\Storage;
class TestimonialController extends Controller
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
        $testimonials=Testimonial::all();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename=Storage::disk('public')->put('',$request->photo);
        $testimonial=new Testimonial();
        $testimonial->nom=ColorChanger::black($request->nom);
        $testimonial->prenom=ColorChanger::black($request->prenom);
        $testimonial->texte=ColorChanger::black($request->texte);
        $testimonial->lien=$request->lien;
        $testimonial->photo=$filename;
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit',compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        if($request->hasFile('photo')){
            if(Storage::disk('public')->exists($testimonial->photo)){
                Storage::disk('public')->delete($testimonial->photo);
            }
            $filename=Storage::disk('public')->put('',$request->photo);
            $testimonial->photo=$filename;
        }
        $testimonial->nom=ColorChanger::black($request->nom);
        $testimonial->prenom=ColorChanger::black($request->prenom);
        $testimonial->texte=ColorChanger::black($request->texte);
        $testimonial->lien=$request->lien;
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if(Storage::disk('public')->exists($testimonial->photo)){
            Storage::disk('public')->delete($testimonial->photo);
        }
        $testimonial->delete();
        return redirect()->back();
    }
}
