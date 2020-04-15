@extends('layouts.admin')

@section('title')
    Section Contact
@endsection

@section('content')
<div class="card">
    <div class="card-contact">
      <h3 class="card-title">Table Contact</h3>
    </div>
    <!-- /.card-contact -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>Nom</th>
              <th>Adresse</th>
              <th>Ville</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                <td>{{$contact->nom}}</td>
                <td>{{$contact->adresse}}</td>
                <td>{{$contact->ville}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->email}}</td>
                <td><a href="{{route('contact.edit',$contact)}}" class="btn btn-warning">Editer</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection