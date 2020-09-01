<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class ControllerEvent extends Controller
{
    //Formulario de Evento
    public function form(){
      return view('/Evento/form');
    }

}
