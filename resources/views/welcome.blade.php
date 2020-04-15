@extends('layouts.app')

@section('title','Accueil')

@section('content')
<div id="wrapper">
    @include('partials.header')
    @include('partials.featured')
    @include('partials.content')
    @include('partials.testimonials')
    @include('partials.works')
    @include('partials.footer')
</div>
@endsection