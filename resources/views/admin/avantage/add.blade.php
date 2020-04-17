@extends('layouts.admin')
@section('title')
    Ajouter Avantage
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add Avantage</h3>
      <p class="card-text">Pour mettre du texte en noir, vous pouvez mettre des [] autour de celui-ci</p>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
<form role="form" action="{{route('avantage.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="titre">Titre</label>
        <input type="text" class="form-control" id="titre" placeholder="Enter Title" name="titre" value="{{old('titre')}}">
        </div>
        <div class="form-group" data-select2-id="29">
          <label>Icone</label>
          <select class="form-control icone-select fas"  name="icone">
            @foreach ($icons as $item)
            <div class="icon">
              <option data-select2-id="14" value="{{$item['class']}}" class="fas">&#x{{$item['code']}}; {{$item['text']}}</option>
            </div>
            @endforeach
          </select>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection