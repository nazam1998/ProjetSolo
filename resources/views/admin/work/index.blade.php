@extends('layouts.admin')

@section('title')
    Section Work
@endsection

@section('content')
<div class="container text-center my-2">
<a href="{{route('work.create')}}" class="btn btn-primary">Ajouter Work</a>
</div>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Work Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>ID</th>
              <th>Image</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr>
                <td>{{$work->id}}</td>
                <td><img src="{{asset('storage/'.$work->image)}}" alt=""></td>
                <td><a href="{{route('work.edit',$work)}}" class="btn btn-warning">Editer</a></td>

                <td>
                  <form action="{{route('work.destroy',$work)}}" method="post">
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