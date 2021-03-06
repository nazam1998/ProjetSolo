@extends('layouts.admin')
@section('title')
    Editer Testimonial
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-testimonial">
      <h3 class="card-title">Edit Testimonial</h3>
      <p class="card-text">Pour mettre du texte en noir, vous pouvez mettre des [] autour de celui-ci</p>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
<form role="form" action="{{route('testimonial.update',$testimonial)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Enter Name" name="nom" value="{{$testimonial->nom}}">
        </div>
        <div class="form-group">
          <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" placeholder="Enter Surname" name="prenom" value="{{$testimonial->prenom}}">
        </div>
        <div class="form-group">
          <label for="lien">Lien</label>
        <input type="text" class="form-control" id="lien" placeholder="https://example.com" name="lien" value="{{$testimonial->lien}}">
        </div>
        <div class="form-group">
          <label for="texte">Texte</label>
          <textarea name="texte" id="texte" cols="30" rows="10" class="form-control">{{$testimonial->texte}}</textarea>
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
        <button type="submit" class="btn btn-primary">Editer</button>
      </div>
    </form>
  </div>
@endsection