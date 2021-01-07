@extends('layouts.profile')
@section('profileContent')
<main class="container-fluid">
    <nav class="row align-items-center border-bottom">
        <div class="col-12 col-md-4">
            <img id="userImg" src="" alt="">
        </div>
        <p class="col-12 col-md-4" id="userName">{{$user->name}}</p>
        <section class="col-6 col-md-2 flex-column" id="followers">
            <p class="row justify-content-center"></p>
            <p class="row justify-content-center">{{trans('messages.followers')}}</p>
        </section>
        <section class="col-6 col-md-2 flex-column" id="followed">
            <p class="row justify-content-center"></p>
            <p class="row justify-content-center">{{trans('messages.followed')}}</p>
        </section>
        <p class="col-12 bio">{{$user->bio}}</p>
        <h2 class="col-12 text-center">{{trans('messages.projects')}}</h2>
    </nav>
</main>
@endsection

