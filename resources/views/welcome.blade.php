<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{asset('/css/estiloFinal.css')}}" rel="stylesheet">


</head>
<body>


  <!-- Navegador -->
  <nav class="navbar d-flex justify-content-between navbar-expand-lg navbar-light ">

  
    <a class="navbar-brand" href="#"> <img src="img/logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    
    
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="input-group  d-flex justify-content-end">
          
              <button id="loginButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">{{trans('messages.login')}}</button>
              <button id="registerButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop2">{{trans('messages.signIn')}}</button>
    
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{trans('messages.lang')}}
            </a>
           
              <div id="languages" class="dropdown-menu" aria-labelledby="navbarDropdown">
                <ul>
                <li><a href="{{ url('lang', ['es']) }}">Castellano</a></li>
                <li><a href="{{ url('lang', ['en']) }}">English</a></li>
                </ul>
              </div>
          
        </div>
</div>

 
  </nav>



    <!-- Modal Y Login -->

  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog"  id="loginModal">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{trans('messages.loginArea')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="loginModalBody">
            <form id="loginForm" action="{{route('login')}}" method="post">
                @csrf
                @error('email')
                    <div class="m-3">
                        <strong style="color: red;">{{$message}}</strong>
                    </div>
                @enderror
                  <div class="from-label-group ">
                        <div class="col-md-12 mb-3">
                          <label for="validationDefault04">{{trans('messages.email')}}</label>
                          <input type="email" class="form-control" name="email" id="validationDefault04" required>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="validationDefault05">{{trans('messages.password')}}</label>
                          <input type="password" class="form-control" name="password" id="validationDefault05" required>
                        </div>
                  </div>
                  <div class="d-flex justify-content-center">
                      <button id="loginSend" class="btn btn-primary btn-block m-0" type="submit">{{trans('messages.submit')}}</button>
                  </div>
                </form>
        </div>
        <div class="modal-footer">
          <p class="col-9 text-left">{{trans('messages.loginFooter')}}</p>
          <button type="button" class="btn btn-primary"  data-toggle="modal"  data-target="#staticBackdrop2">{{trans('messages.signIn')}}</button>
        </div>
      </div>
    </div>
</div>

    <!-- Modal Y Registro -->



<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel2">{{trans('messages.registerArea')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" action="{{route ('register')}}" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="name">{{trans('messages.username')}}</label>
                  <input type="text" class="form-control" id="name" name="name" :value="old('name')" required>
                  @error('name')
                      <strong style="color: red;">{{$message}}</strong>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phone">{{trans('messages.phone')}}</label>
                  <input type="tel" class="form-control" id="phone" name="phone" required>
                  @error('phone')
                    <strong style="color: red;">{{$message}}</strong>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="email">{{trans('messages.email')}}</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                  @error('email')
                    <strong style="color: red;">{{$message}}</strong>
                  @enderror
                </div>
              </div>
              <div class="form-row">
              <div class="col-md-6 mb-3">
                  <label for="password">{{trans('messages.password')}}</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                  @error('password')
                    <strong style="color: red;">{{$message}}</strong>
                  @enderror
                </div>
                <div class="col-md-6 mb-3">
                  <label for="password_confirmation">{{trans('messages.confirmPassword')}}</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                <label for="customFile">{{trans('messages.image')}}</label>
                <div class="form-group">
                  <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
                  @error('img')
                    <strong style="color: red;">{{$message}}</strong>
                  @enderror
                </div>
                </div>
              </div>

                <label for="custom-control-input">{{trans('messages.role')}}</label>
                <div class="col-md-12 mb-3">
                    <div class="form-row">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input " name="role1" value="{{trans('messages.director')}}" id="role1">
                            <label class="custom-control-label" for="role1">{{trans('messages.director')}}</label>
                        </div>

                        <div class="custom-control custom-checkbox ml-4">
                            <input type="checkbox" class="custom-control-input" name="role2" value="{{trans('messages.actor')}}" id="role2">
                            <label class="custom-control-label" for="role2">{{trans('messages.actor')}}</label>
                        </div>

                        <div class="custom-control custom-checkbox ml-4">
                            <input type="checkbox" class="custom-control-input" name="role3" value="{{trans('messages.writer')}}" id="role3">
                            <label class="custom-control-label" for="role3">Screen {{trans('messages.writer')}}</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="role4" value="{{trans('messages.tech')}}" id="role4">
                            <label class="custom-control-label" for="role4">{{trans('messages.tech')}}</label>
                        </div>
                    </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="bio">{{trans('messages.bio')}}</label>
                  <textarea type="text" class="form-control" id="bio" name="bio" placeholder="Somethign you want to say to the world?" required></textarea>
                </div>
              </div>
              <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agree" required>
                    <label class="form-check-label" for="agree">{{trans('messages.terms')}}</label>
                  </div>
              </div>
                <button id="registerSend" type="submit" class="btn btn-primary float-right">{{trans('messages.submit')}}</button>
          </form>
          <a href="" data-toggle="modal" data-target="#restoreAccount">{{trans('messages.restoreAccountMessage')}}</a>
            <!-- Modal Recuperar Cuenta--->

            <div class="modal" id="restoreAccount" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">{{trans('messages.restoreAccountTitle')}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div id="restoreCountBody" class="modal-body">
                      <form action="/restoreAccount" method="POST">
                        @csrf
                        <p>{{trans('messages.restoreAccount')}}</p>
                        <input type="email" class="form-control m-1" id="email" name="email">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{trans('messages.send')}}</button>
                          </div>
                        </form>
                    </div>

                  </div>
                </div>
              </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>

  <!-- Bienvenida -->


  <section id="welcome" class="container-fluid">
          <section id="welcomeCaja" class="container-row p-4 align-items-center border-bottom">
              <div id="fondo">
                <div class="container-fluid">
                    <div id="bienvenida" class="text-center">
                        <h1>{{trans('messages.welcome')}}</h1>
                        <p class="col-12 text-center">{{trans('messages.welcomeText1')}}<br>{{trans('messages.welcomeText2')}}</p>
                        <button type="button" id="botonJoin" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">{{trans('messages.join')}}</button>
                    </div>
                </div>
              </div>
                <section id="fliping" class="col-12">
                    <div class="row p-2 justify-content-center align-items-center mt-5">
                        <div class="flip-card col-lg-3 col-6 align-items-center mb-1">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">

                                    <img class="icono" src="img/camera.png" alt="Avatar">
                                </div>
                                <div class="flip-card-back rounded d-flex align-items-center">
                                    <p class="card-text">{{trans('messages.flip1')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-lg-3 col-6  align-items-center mb-1">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="img/user.png" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">{{trans('messages.flip2')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-lg-3 col-6">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="img/email.png" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">{{trans('messages.flip3')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-lg-3 col-6">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="img/search.png" alt="Avatar">
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
        <div id="mobil">
    </div>
        <div class="container-row">
        <div class="col-12">
        <img id="roll" src="img/roll.jpg" alt="">
        </div>
    </div>



<div id="lista" class="container-row text-center d-flex justify-content-center">
<ul class="list-group list-group-horizontal">
  <li class="list-group-item"><h6>+10000</h6>{{trans('messages.users')}}</li>
  <li class="list-group-item"><h6>+200</h6>{{trans('messages.projects')}}</li>
  <li class="list-group-item"><h6>Infinitas</h6>{{trans('messages.options')}}</li>
</ul>
</div>

<!--Carrousel-->

<div class="row mt-5">
    <section class="col-12 col-xl-8  ">
        <h2 id="proyectos" class="text-center">{{trans('messages.projectsText')}}</h2>
        <p class="text-center">{{trans('messages.projectsText1')}}
            <br>{{trans('messages.projectsText2')}}</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img class="d-block w-100" src="img/rodaje1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block w-100" src="img/rodaje2.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block w-100" src="img/rodaje3.jpeg" alt="Third slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block w-100" src="img/rodaje4.jpg" alt="Fourth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="col-12 col-xl-4">
            <div id="jumbo" class="jumbotron">
                <h2 class="display-5">{{trans('messages.explore')}}</h2>
                <section class="row justify-content-center">
                    <h2 class="col-12">{{trans('messages.tags')}}</h2>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.film')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.shortfilm')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.documentary')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.videoclip')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.photos')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.horror')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.comedy')}}</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">{{trans('messages.drama')}}</a>
                </section>
                <hr class="my-4">
                <section class="row justify-content-center">
                    <h2 class="col-12">{{trans('messages.newArtists')}}</h2>
                    <a class="btn btn-primary m-3" href="">{{trans('messages.actors')}}</a>
                    <a class="btn btn-primary m-3" href="">{{trans('messages.directors')}}</a>
                    <a class="btn btn-primary m-3" href="">{{trans('messages.technitians')}}</a>
                    <a class="btn btn-primary m-3" href="">{{trans('messages.producers')}}</a>
                    <a class="btn btn-primary m-3" href="">{{trans('messages.writers')}}</a>
                </section>
            </div>
        </section>
    </div>

    <!--Cards-->

    <div class="container-row">
        <div class="col-12">
        <img id="roll" src="img/roll.jpg" alt="">
        </div>
    </div>
<div class="row mt-5">
    <section class="col-12">
        <h2 id="proyectos" class="text-center">{{trans('messages.cardsTitle')}}</h2>
        <p class="text-center">{{trans('messages.cardsText1')}}
            <br>{{trans('messages.cardsText2')}}</p>
            <div class="row">
            <div class="col-lg-6 col-12">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-4">
                    <img src="img/actriz.jpg"  class="card-img" alt="...">
                    </div>
                    <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">Tina Robertson</h5>
                        <p class="card-text">{{trans('messages.cardsDesc1')}}</p>
                        <p class="card-text"><small class="text-muted">{{trans('messages.actors')}}</small></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-4">
                    <img src="img/actor.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">Michael Brown</h5>
                        <p class="card-text">{{trans('messages.cardsDesc2')}}</p>
                        <p class="card-text"><small class="text-muted">{{trans('messages.actor')}}</small></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

    </div>
  </div>
@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript">
    var modal;
    var refresh = false;
    var count = 0;
    
    window.onload = initialize;
    function initialize() {
        $('#registerButton').click(whatModalIsExecuted);
        $('#loginButton').click(whatModalIsExecuted);
        iniciar();
    }
    
    function whatModalIsExecuted() {
        modal = $(this).attr('id');
        localStorage.setItem('modal', modal);
        console.log(modal);
    }

    @if (count($errors) > 0)
        if(localStorage.getItem('modal') == 'loginButton') {
            $( document ).ready(function() {
                $('#staticBackdrop').modal('show');
            });
        }
        else {
            $( document ).ready(function() {
                $('#staticBackdrop2').modal('show');
            });
        }
    @endif
    
    //CALL TO ACTION
    
    /* let x = $(document);
    x.ready = iniciar(); */

    function iniciar(){

    
        setTimeout(function() {
          let x = $("#staticBackdrop").modal('show');
      }, 20000);
  


    }
  

</script>
</body>
</html>
