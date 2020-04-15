@extends('layouts.admin')

@section('title')
    Section Newsletter
@endsection

@section('content')
<div class="container text-center">

</div>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Newsletter Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>ID</th>
              <th>Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($newsletters as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->email}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection