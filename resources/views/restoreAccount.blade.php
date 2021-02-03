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
            <img src="/img/logo2.png" alt="">
        </x-slot>

            <!-- Modal --->
        <p>{{trans('messages.restoreAccountError')}}</p>
        <a href="/register"><button class="btn btn-primary" type="">{{trans('messages.accept')}}</button></a>
    </x-jet-authentication-card>
</x-guest-layout>
</body>
</html>
