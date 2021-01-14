@extends('layouts.profile')
@section('profileContent')
<main class="container-fluid">
    <nav class="row align-items-center border-bottom">
        <div class="col-12 col-md-4 d-flex justify-content-center">
            <img style="width: 200px; height: 200px" class="rounded-circle" src="\storage\{{$user->img}}" alt="{{$user->img}}" >
        </div>
        <p class="col-12 col-md-4" id="userName">{{$user->name}}</p>
        <section class="col-6 col-md-2 flex-column" id="followers">
            <p class="row justify-content-center">{{$followers->count()}}</p>
            <a class="row justify-content-center" href="/followers">{{trans('messages.followers')}}</a>
        </section>
        <section class="col-6 col-md-2 flex-column" id="followed">
            <p class="row justify-content-center">{{$followeds->count()}}</p>
            <a class="row justify-content-center" href="/followeds">{{trans('messages.followeds')}}</a>
        </section>
        <p class="col-12 bio">{{$user->bio}}</p>
        <h2 class="col-12 text-center">{{trans('messages.projects')}}</h2>
    </nav>
</main>
@endsection

