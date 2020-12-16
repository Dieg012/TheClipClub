<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">


</head>
<body>

<div class="row mt-5">
    <section class="col-12 col-xl-8  ">
        <h2 id="proyectos" class="text-center">Cientos de proyectos audiovisuales a tu alcance</h2>
        <p class="text-center">Crea tu propio proyecto o unete a los cientos disponibles. 
            <br>Descrube las distintas categorías posibles</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img class="d-block w-100" src="{{ asset('img/rodaje1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block w-100" src="{{ asset('img/rodaje2.jpeg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block w-100" src="{{ asset('img/rodaje3.jpeg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block w-100" src="{{ asset('img/rodaje4.jpg') }}" alt="Fourth slide">
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
                <h2 class="display-5">Explore!</h2>
                <section class="row justify-content-center">
                    <h2 class="col-12">Search projects by tags</h2>
                    <a class="btn btn-primary rounded-circle m-3" href="">#film</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#shortfilm</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#documentary</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#videoclip</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#photoshoot</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#horror</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#comedy</a>
                    <a class="btn btn-primary rounded-circle m-3" href="">#drama</a>
                </section>
                <hr class="my-4">
                <section class="row justify-content-center">
                    <h2 class="col-12">Discover new artists</h2>
                    <a class="btn btn-primary m-3" href="">Actors</a>
                    <a class="btn btn-primary m-3" href="">Directors</a>
                    <a class="btn btn-primary m-3" href="">Technicians</a>
                    <a class="btn btn-primary m-3" href="">Producers</a>
                    <a class="btn btn-primary m-3" href="">Writers</a>
                </section>
            </div>
        </section>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>