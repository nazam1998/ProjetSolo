@extends('layouts.admin')
@section('title')
    Editer Work
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-testimonial">
      <h3 class="card-title">Editer Work</h3>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
<form role="form" action="{{route('work.update',$work)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="card-body">
        
        <div class="form-group">
          <label for="image">Image</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">Choose file</label>
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