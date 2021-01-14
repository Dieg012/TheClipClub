<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.followeds') }}
            @csrf
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="container-fluid">
                    <div class="row">
                        @foreach ($followeds as $followed)
                            <div class="col-12 col-lg-4 d-flex justify-content-center">
                                <form action="/unfollow/{{$followed->id}}" method="POST">
                                    @csrf
                                    <img src="" alt="">{{$followed->img}}
                                    <span>{{$followed->name}}</span>
                                    <input type="submit" value="{{trans('messages.unfollow')}}">
                                </form>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
