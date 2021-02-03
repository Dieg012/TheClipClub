@extends('layouts.profile')
@section('profileContent')
<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
<main class="container-fluid">
    <div class="row align-items-center border-bottom p-5">
        <section class="col-12 col-md-3">
            <div class="row ">
                <div class="col-12 d-flex justify-content-center">
                    <img style="width: 200px; height: 200px" class="rounded-circle" src="../storage/{{$user->img}}" alt="{{$user->img}}" >
                </div>
            </div>
        </section>
        <p class="col-12 col-md-5" id="userName">{{$user->name}}</p>
        <section class="col-6 col-md-2 flex-column" id="followers">
            <p class="row justify-content-center">{{$followers->count()}}</p>
            <a class="row justify-content-center" href="/followers">{{trans('messages.followers')}}</a>
        </section>
        <section class="col-6 col-md-2 flex-column" id="followeds">
            <p class="row justify-content-center">{{$followeds->count()}}</p>
            <a class="row justify-content-center" href="/followers">{{trans('messages.followeds')}}</a>
        </section>
        </section>
        <p class="col-12 m-5 bio">{{$user->bio}}</p>
    </div>
    <h2 class="col-12 text-center">{{trans('messages.projects')}}</h2>
    <div id="projects" class="col-12 d-flex justify-content-around row p-3"></div>
    <div class="modal fade" tabindex="-1" id="deleteModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attention!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete it?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="deleteProjectButton" type="button" class="btn btn-danger submit" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('/js/projectsAjax.js')}}"></script>
<script>
    initialize({{Auth::user()->id}});
</script>
@endsection

