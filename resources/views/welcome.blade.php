<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
</head>
<body>


  <!-- Navegador -->

  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo2.png') }}">
    </a>

    <div class="input-group">
      <div class="input-group-append" id="button-addon4">
        <button type="button" class="btn btn-primary" >
          <a href="{{ route('login') }}" class="text-sm text-white">{{trans('messages.login')}}</a>
        </button>
        <button type="button" class="btn btn-primary" >
          <a href="{{ route('register') }}" class="text-sm text-sm text-white">{{trans('messages.signIn')}}</a>
        </button>
      </div>
    </div>



    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{trans('messages.lang')}}
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a href="{{ url('lang', ['es']) }}">Castellano</a>
      <a href="{{ url('lang', ['en']) }}">English</a>
</div>
</li>
  </nav>

  <!-- Bienvenida -->

        <section id="welcome" class="container-fluid">
          <section class="row p-4 align-items-center border-bottom">
              <div id="fondo">
                <div   class="container-fluid">
                    <div  id="bienvenida" class="col-xl-12 col-sm-12 text-center">
                        <h1>{{trans('messages.welcome')}}</h1>
                        <p class="col-12 text-center">{{trans('messages.welcomeText1')}}<br>{{trans('messages.welcomeText2')}}</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">{{trans('messages.join')}}</button>
                    </div>
                </div>
              </div>
                <section class="col-12 col-lg-5">
                    <div class="row p-2 justify-content-center align-items-center">
                        <div class="flip-card col-6 align-items-center mb-1">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">

                                    <img class="icono" src="{{ asset('img/camera.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back rounded d-flex align-items-center">
                                    <p class="card-text">{{trans('messages.flip1')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-6 align-items-center mb-1">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="{{ asset('img/user.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">{{trans('messages.flip2')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-6 ">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="{{ asset('img/email.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">{{trans('messages.flip3')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-6 ">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="{{ asset('img/search.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">{{trans('messages.flip4')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
        <div class="container-row">
        <div class="col-12">
        <img id="roll" src="img/roll.jpg" alt="">
        </div>
    </div>
<div id="lista" class="container-row col-6 text-center">
<ul class="list-group list-group-horizontal">
  <li class="list-group-item"><h6>+10000</h6>{{trans('messages.users')}}</li>
  <li class="list-group-item"><h6>+200</h6>{{trans('messages.projects')}}</li>
  <li class="list-group-item"><h6>Infinitas</h6>{{trans('messages.options')}}</li>
</ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
