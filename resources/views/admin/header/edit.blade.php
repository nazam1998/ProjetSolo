@extends('layouts.admin')
@section('title')
    Editer Header
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit header</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('header.update',$header->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="titre">Titre</label>
        <input type="text" class="form-control" id="titre" placeholder="Enter Title" name="titre" value="{{$header->titre}}">
        </div>
        <div class="form-group">
          <label for="description">Titre</label>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$header->description}}</textarea>
        </div>
        <div class="form-group">
          <label for="image1">Image 1</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image1" name="image1">
              <label class="custom-file-label" for="image1">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="image2">Image 2</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image2" name="image2">
              <label class="custom-file-label" for="image1">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection