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

        <form  method="POST" action="{{route ('register')}}" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="name">{{trans('messages.username')}}</label>
              <input type="text" class="form-control" id="name" name="name" :value="old('name')" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="phone">{{trans('messages.phone')}}</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="email">{{trans('messages.email')}}</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
          <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="password">{{trans('messages.password')}}</label>
              <input type="password" class="form-control" id="password" name="password" required>
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
            <button type="submit" class="btn btn-primary float-right">{{trans('messages.submit')}}</button>
      </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
