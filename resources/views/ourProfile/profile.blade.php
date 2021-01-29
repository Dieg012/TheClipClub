@extends('layouts.profile')
@section('profileContent')
<main class="container-fluid">
    <div class="bg-primary row align-items-center border-bottom">
        <section class="col-12 col-md-3">
            <div class="row ">
                <div class="col-12  d-flex justify-content-center">
                    <img style="width: 200px; height: 200px" class="rounded-circle" src="../storage/{{$user->img}}" alt="{{$user->img}}" >
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a class="" href="">{{trans('messages.changeProfileImg')}}</a>
                </div>
            </div>
        </section>

        <div class="row">
        <section class="col-md-9 col-12">
        <div class="col-6">
        <p class="col-12 col-md-2" id="userName">{{$user->name}}</p>
        <p class="col-12 bio">{{$user->bio}}</p>
        </div>
       
        <section class="col-5 col-md-5  m-2  " id="followed">
            <p class="row justify-content-center">{{$followeds->count()}}</p>
            <a class="row justify-content-center" href="/followeds">{{trans('messages.followeds')}}</a>
        </section>
        <section class="col-5 col-md-5 m-2" id="followers">
            <p class="row justify-content-center">{{$followers->count()}}</p>
            <a class="row justify-content-center" href="/followers">{{trans('messages.followers')}}</a>
        </section>
     
        </section>
        </div>
        
     
 
       
</div>
    <h2 class="col-12 text-center">{{trans('messages.projects')}}</h2>
</main>
@endsection

