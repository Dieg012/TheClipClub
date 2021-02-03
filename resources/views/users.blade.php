<x-app-layout>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

    <div id="userContainer" class="container-fluid">
        <h2 class="col-12 text-center">{{trans('messages.users')}}</h2>
        <hr>
        <form name="searchForm" id="searchForm" class="col-12 col-md-5 col-lg-2 d-flex justify-content-center" action="GET">
            @csrf
            <input id="searchParam" class="form-control mr-1" type="text">
            <input type="button" class="btn btn-primary" id="searchButton" value="{{trans('messages.search')}}">
        </form>
        <hr>
        <section class="col-md-4 justify-items-start">
            @foreach($users as $user)
                @if($user->id != Auth::id())
                    <div class="row d-flex justify-items-center align-items-center">
                        <div class="col-md-3 d-flex justify-content-center">
                            <img src="../storage/{{$user->img}}" class="rounded-circle" style="width: 50px; height: 50px" alt="">
                        </div>
                        <span class="col-md-4" type="text">{{$user->name}}</span>
                        @php
                            $isFollowed = false;
                        @endphp
                        @foreach (Auth::user()->followeds as $followed)
                            @if ($user->id === $followed->id)
                                @php
                                    $isFollowed = true;
                                @endphp
                            @endif
                        @endforeach
                        @if ($isFollowed === true)
                            <form class="col-md-5" action="/unfollow/{{$user->id}}" method="POST">
                                @csrf
                                <input class="col-md-12 btn btn-primary" type="submit" value='Unfollow'>
                            </form>
                        @else
                            <form class="col-md-5" action="/follow/{{$user->id}}" method="POST">
                                @csrf
                                <input class="col-md-12 btn btn-primary" type="submit" value='Follow'>
                            </form>
                        @endif
                    </div>
                @endif
            @endforeach
        </section>
    </div>
    <script>
        $(document).ready(init);
        function init() {
            $('#searchButton').click(sendForm);
            $(window).keydown(function(event) {
                if(event.keyCode == 13) {
                    event.preventDefault();
                    sendForm();
                    return false;
                }
            });
        }
        function sendForm() {
            let param = $('#searchParam').val();
            $('#searchForm').attr('action', '/users/'+param);
            document.searchForm.submit();
        }
    </script>
</x-app-layout>
