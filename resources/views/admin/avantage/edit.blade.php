@extends('layouts.admin')
@section('title')
    Ajouter Avantage
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add Avantage</h3>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
<form role="form" action="{{route('avantage.update',$avantage)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="titre">Titre</label>
        <input type="text" class="form-control" id="titre" placeholder="Enter Title" name="titre" value="{{old('titre',$avantage->titre)}}">
        </div>
        <div class="form-group" data-select2-id="29">
          <label>Icone</label>
          <select class="form-control icone-select fas" name="icone">
            @foreach ($icons as $item)
          <option @if($item['class']==$avantage->icone)selected @endif data-select2-id="14" value="{{$item['class']}}" class='fas'>&#x{{$item['code']}};</option>
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