@extends('layouts.admin')
@section('title')
Editer Work
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-testimonial">
        <h3 class="card-title">Editer Work</h3>
    </div>
    <!-- /.card-testimonial -->
    <!-- form start -->
    <form role="form" action="{{route('mail.update',$mail)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">

            <div class="form-group">
                <label for="msg">Mail Message</label>
                <div class="input-group">
                    <textarea name="msg" id="" cols="30" rows="10">{{$mail->msg}}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
