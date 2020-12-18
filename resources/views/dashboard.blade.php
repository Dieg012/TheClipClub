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

    @can('Admin')
    <div>
        <h1>admin</h1>
    </div>
    @endcan

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>