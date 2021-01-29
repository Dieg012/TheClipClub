<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estiloFinal.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navegador -->

<x-app-layout> </x-app-layout>


  <!-- Bienvenida -->
  
        <section id="welcome" class="container-fluid">
          <section class="row p-4 align-items-center border-bottom">
              <div id="fondo">
                <div   class="container-fluid">
                    <div  id="bienvenida" class="col-xl-12 col-sm-12 text-center">
                        <h1>{{trans('messages.welcome')}}</h1>
                        <p class="col-12 text-center">{{trans('messages.welcomeText1')}}<br>{{trans('messages.welcomeText2')}}</p>
                        
                    </div>
                </div>
              </div>
              
        </section>
        <div class="container-row">
        <div class="col-12">
        <img id="roll" src="img/roll.jpg" alt="">
        </div>
    </div>





   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>