<x-app-layout>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <div class="p-5 bg-dark" style="height: 100vh;">
        <div id="userContainer" class="container-fluid bg-white rounded p-3" style="height: 85vh;">
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
                            @if ($user->deleted_at === null)
                                <form class="col-md-5" action="/deleteUser/{{$user->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input class="col-md-12 btn btn-primary" type="submit" value='ACTIVE'>
                                </form>
                            @else
                                <form class="col-md-5" action="/restoreUser/{{$user->id}}" method="POST">
                                    @csrf
                                    <input class="col-md-12 btn btn-danger" type="submit" value='DEACTIVATED'>
                                </form>
                            @endif
                        </div>
                    @endif
                @endforeach
            </section>
        </div>
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
            $('#searchForm').attr('action', '/manageUsers/'+param);
            document.searchForm.submit();
        }
    </script>
</x-app-layout>
