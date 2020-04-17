@extends('layouts.admin')
@section('title')
    Editer Contact
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Contact</h3>
      <p class="card-text">Pour mettre du texte en noir, vous pouvez mettre des [] autour de celui-ci</p>
    </div>
    <!-- /.card-contact -->
    <!-- form start -->
<form role="form" action="{{route('contact.update',$contact)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Enter Nom" name="nom" value="{{$contact->nom}}">
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
        <input type="text" class="form-control" id="adresse" placeholder="Enter Addres" name="adresse" value="{{$contact->adresse}}">
        </div>
        <div class="form-group">
          <label for="ville">Ville</label>
        <input type="text" class="form-control" id="ville" placeholder="Enter ville" name="ville" value="{{$contact->ville}}">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="{{$contact->phone}}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Phone Number" name="email" value="{{$contact->email}}">
        </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection