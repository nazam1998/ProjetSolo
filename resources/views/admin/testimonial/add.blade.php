@extends('layouts.admin')
@section('title')
    Ajouter Testimonial
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-testimonial">
      <h3 class="card-title">Add Testimonial</h3>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
<form role="form" action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Enter Title" name="nom" value="{{old('nom')}}">
        </div>
        <div class="form-group">
          <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" placeholder="Enter Title" name="prenom" value="{{old('prenom')}}">
        </div>
        <div class="form-group">
          <label for="lien">Lien</label>
        <input type="text" class="form-control" id="lien" placeholder="https://example.com" name="lien" value="{{old('lien')}}">
        </div>
        <div class="form-group">
          <label for="texte">Texte</label>
          <textarea name="texte" id="texte" cols="30" rows="10" class="form-control">{{old('texte')}}</textarea>
        </div>
        <div class="form-group">
          <label for="photo">Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="photo" name="photo">
              <label class="custom-file-label" for="photo">Choose file</label>
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