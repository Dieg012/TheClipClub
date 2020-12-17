<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
</head>
<body>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        
        <x-jet-validation-errors class="mb-4" />
        <form action="{{route('login')}}" method="post">
          @csrf
            <div class="from-label-group ">
                  <div class="col-md-12 mb-3">
                    <label for="validationDefault04">Email</label>
                    <input type="email" class="form-control" name="email" id="validationDefault04" required>
                    </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationDefault05">Password</label>
                    <input type="password" class="form-control" name="password" id="validationDefault05" required>
                  </div>
                  
            </div>

            <div class="d-flex justify-content-center">
                <button id="send" class="btn btn-primary btn-block m-0" type="submit">Send</button>
            </div>
            
          </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
