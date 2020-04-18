@extends('layouts.admin')

@section('title')
    Section Avantage
@endsection

@section('content')
<div class="container text-center my-2">
<a href="{{route('avantage.create')}}" class="btn btn-primary">Ajouter Avantage</a>
</div>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Avantage Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>ID</th>
              <th>Titre</th>
              <th>Icone</th>
              <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($avantages as $avantage)
                <tr>
                <td>{{$avantage->id}}</td>
                <td>{!! $avantage->titre !!}</td>
                <td><i class="ico icon-circled icon-bgdark {{$avantage->icone}} active icon-3x">  {{$avantage->icone}}</i></td>

                <td><a href="{{route('avantage.edit',$avantage)}}" class="btn btn-warning">Editer</a></td>
                <td>
                  <form action="{{route('avantage.destroy',$avantage)}}" method="post">
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