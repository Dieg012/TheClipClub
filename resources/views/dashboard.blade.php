<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @csrf
        </h2>
    </x-slot>
    @if(session('status'))
        {{session('status')}}
    @endif

<<<<<<< HEAD
    @can('Admin')
    <div>
        <h1>admin</h1>
    </div>
    @endcan

=======
>>>>>>> e2ee8a84ac094c6cf9a83148b3d7c9f96c4c7f4c
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>