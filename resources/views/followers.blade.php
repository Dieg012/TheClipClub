<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.followers') }}
            @csrf
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="container-fluid">
                    <div class="row">
                        @foreach ($followers as $follower)
                            <div class="col-12 col-lg-4 d-flex justify-content-center">
                                @php
                                    $isFollowed = false;
                                @endphp
                                @foreach ($followeds as $followed)
                                    @if ($follower->id === $followed->id)
                                        @php
                                            $isFollowed = true;
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($isFollowed === true)
                                    <form action="/unfollow/{{$follower->id}}" method="POST">
                                        @csrf
                                        <img src="" alt="">{{$follower->img}}
                                        <span>{{$follower->name}}</span>
                                        <input type="submit" value="unfollow">
                                    </form>
                                @else
                                    <form action="/follow/{{$follower->id}}" method="POST">
                                        @csrf
                                        <img src="" alt="">{{$follower->img}}
                                        <span>{{$follower->name}}</span>
                                        <input type="submit" value="follow">
                                    </form>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
