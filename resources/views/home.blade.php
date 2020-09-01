@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: black;">Felicidades!</div>

                <div class="card-body" style="background-color: black;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">

                    Ya estas registrado!

                    Podes comenzar creando tus tareas <br><br>

                     <a href="{{ asset('/Evento/form')}}" class="btn-primary" style="margin-left: 220px;">Crear <b>tareas!</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
