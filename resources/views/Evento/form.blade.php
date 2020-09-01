@extends('layouts.default')
@section('content')

    <style>
    body{
      font-family: 'Muli', sans-serif;
      background-color: black;
      color: white;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>
      <div class="container">
      <div style="height:2px"></div>
      <p class="lead">
      <h3>Evento</h3>
      <p>Especifica tu tarea</p>
      <a style="color: blue;"  href="{{ asset('/Calendar/event') }}">Ir a Calendario</a>
      <div class="row pt-5">
        <div class="col-md-4">
        <form id="form-task">
          @csrf
          <div class="fomr-group">
            <label>Titulo</label>
            <input type="text" class="form-control" id="title">
          </div>
          <div class="fomr-group">
            <label>Descripcion del Evento</label>
            <textarea class="form-control" id="description"></textarea>
          </div>
          <div class="fomr-group">
            <label>Fecha</label>
            <input type="date" class="form-control" id="date">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
        <div class="col-md-8">
                <div id="tasks"></div>
            </div>
  </div>
  
    </div> <!-- /container -->
    
    


  @endsection
