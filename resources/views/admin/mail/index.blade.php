@extends('layouts.admin')

@section('title')
    Section Register Mail
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Register Mail Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
              <th>Message</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mail as $mail)
                <tr>
                <td>{{$mail->msg}}</td>
                <td><a href="{{route('mail.edit',$mail)}}" class="btn btn-warning">Editer</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection