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







</body>
</html>
