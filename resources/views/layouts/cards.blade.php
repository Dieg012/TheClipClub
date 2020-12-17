<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">


</head>
<body>
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
            <div class=col-6>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{ asset('img/actriz.jpg') }}"  class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Tina Robertson</h5>
                        <p class="card-text">{{trans('messages.cardsDesc1')}}</p>
                        <p class="card-text"><small class="text-muted">{{trans('messages.actors')}}</small></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class=col-6>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{ asset('img/actor.jpg') }}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>