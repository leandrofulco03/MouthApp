@extends('layouts.default')

@section('content')
<div class="container" style="background-color: black; padding-bottom: 180px; padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height:150px; float: left; border-radius: 50%; margin-right: 25px;">
          <h2>{{ $user->name }}</h2>
          <h4>{{ $user->username }}</h4>
          <form enctype="multipart/form-data" action="/profile" method="post">
           <label>Cambiar Foto de Perfil</label>
           <input type="file" name="avatar" style="margin: 9px;">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="submit" class="pull-right btn btn-sm btn-primary" >
          </form>
        </div>
    </div>
</div>
@endsection
