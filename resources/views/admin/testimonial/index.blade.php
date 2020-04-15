@extends('layouts.admin')

@section('title')
    Section Testimonial
@endsection

@section('content')
<div class="container text-center">
<a href="{{route('testimonial.create')}}" class="btn btn-primary">Ajouter Testimonial</a>
</div>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Testimonial Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>ID</th>
              <th>Photo</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Texte</th>
              <th>Lien</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                <td>{{$testimonial->id}}</td>
                <td><img src="{{asset('storage/'.$testimonial->photo)}}" alt=""></td>
                <td>{{$testimonial->nom}}</td>
                <td>{{$testimonial->prenom}}</td>
                <td>{{$testimonial->texte}}</td>
                <td><a href="{{$testimonial->lien}}">{{$testimonial->lien}}</a></td>
                <td><a href="{{route('testimonial.edit',$testimonial)}}" class="btn btn-warning">Editer</a></td>
                <td>
                  <form action="{{route('testimonial.destroy',$testimonial)}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection