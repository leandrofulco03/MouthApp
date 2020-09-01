<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MouthApp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  </head>
  <body>

<div class="container-fluid" style="background-color: black;">

<nav class="navbar navbar-expand navbar-light"style="background-color: black;">
  <!-- Left side of the Navbar -->
  <ul class="navbar-nav mr-auto">
    <li class="navbar-item" style="text-align: center; font-family: 'Muli', sans-serif; font-size: 20px;">
      <a class="nav-link" href="{{ asset('/Evento/form') }}" style="color: white;">MouthApp<span classs="sr-only"></span></a>
    </li>
  </ul>
  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
        <li class="navbar-item" style="text-align: center; font-family: 'Muli', sans-serif; font-size: 20px;">
          <a class="nav-link" href="{{ route('login') }}" style="color: white;">Iniciar Sesión<span classs="sr-only"></span></a>
        </li>
          @if (Route::has('register'))
            <li class="nav-item" style="text-align: center; font-family: 'Muli', sans-serif; font-size: 20px;">
              <a class="nav-link" href="{{ route('register') }}" style="color: white;">Registrarse<span class="sr-only">(current)</span></a>
            </li>
          @endif
      @else
          <li class="nav-item dropdown" style="background-color: red; text-align: center;">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white; position: relative; padding-left: 50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;">
                  <span style="font-size: 20px;">{{ Auth::user()->username }}</span> <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: red;">
                  <a class="dropdown-item" style="color: white;" href="{{ url('/profile') }}">Perfil</a>
                  <a class="dropdown-item" style="color: white;" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Cerrar Sesión') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
  </ul>

</nav>

<main class="py-4">
@yield('content')
</main>

<script src="/js/main.js"></script>
</body>
</html>
