
@extends('adminlte::page')

@section('title')
    
@endsection

@section('content_header')
    <h1>@yield('title')</h1>
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