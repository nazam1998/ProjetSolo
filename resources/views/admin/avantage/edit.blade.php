@extends('layouts.admin')
@section('title')
Ajouter Avantage
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Avantage</h3>
        <p class="card-text">Pour mettre du texte en noir, vous pouvez mettre des [] autour de celui-ci</p>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
    <form role="form" action="{{route('avantage.update',$avantage)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" placeholder="Enter Title" name="titre"
                    value="{{old('titre',$avantage->titre)}}">
            </div>
            <div class="form-group" data-select2-id="29">
                <label>Icone</label>
                <select class="form-control icone-select" name="icone">
                    @foreach ($icons as $item)
                    @if( $item['class'] == $avantage->icone )
                    <option selected  value="{{$item['class']}}">&#x{{$item['code']}} {{$item['text']}}</option>
                    @else 
                    <option  value="{{$item['class']}}">&#x{{$item['code']}} {{$item['text']}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
</div>
@endsection
