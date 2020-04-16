
@extends('adminlte::page')

@section('title')
    @yield('title')
@endsection

@section('content_header')
    <h1>Dashboard</h1>
    Pour mettre du texte en noir, vous pouvez mettre des [] autour de celui-ci
@stop

@section('content')
    @yield('content')
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop