<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">


</head>
<body>

  <!-- Bienvenida -->


        <section id="welcome" class="container-fluid">
          <section class="row p-4 align-items-center border-bottom">
              <div id="fondo">
                <div   class="container-fluid">
                    <div  id="bienvenida" class="col-xl-12 col-sm-12 text-center">
                        <h1>Bienvenido a The Clip Club</h1>
                        <p class="col-12 text-center">¿Tienes un proyecto audiovisual y no conoces a gente para llevarlo a cabo?<br>No te preocupes, unete a la red social 
                        del mundo audiovisual y empieza tu proyecto</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Unete</button>
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
                                    <p class="card-text">Share your projects and be part of other ones</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-6 align-items-center mb-1">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="{{ asset('img/user.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">Follow other artists and make great partners</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-6 ">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="{{ asset('img/email.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">Communicate between your projects member</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card col-6 ">
                            <div class="flip-card-inner">
                                <div class="flip-card-front rounded">
                                    <img class="icono" src="{{ asset('img/search.png') }}" alt="Avatar">
                                </div>
                                <div class="flip-card-back d-flex align-items-center rounded">
                                    <p class="card-text">Explore projects of other people and discover new artists</p>
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
  <li class="list-group-item"><h6>+10000</h6>Usuarios</li>
  <li class="list-group-item"><h6>+200</h6>Proyectos</li>
  <li class="list-group-item"><h6>Infinitas</h6>Opciones</li>
</ul>
</div>

   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>