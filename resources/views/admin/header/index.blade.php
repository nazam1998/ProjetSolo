@extends('layouts.admin')

@section('title')
    Section Header
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Header Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>ID</th>
              <th>Image 1</th>
              <th>Image 2</th>
              <th>Titre</th>
              <th>Description</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($headers as $header)
                <tr>
                <td>{{$header->id}}</td>
                <td><img src="{{asset('storage/'.$header->image1)}}" alt=""></td>
                <td><img src="{{asset('storage/'.$header->image2)}}" alt=""></td>
                <td>{{$header->titre}}</td>
                <td>{{$header->description}}</td>
                <td><a href="{{route('header.edit',$header->id)}}" class="btn btn-warning">Editer</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection