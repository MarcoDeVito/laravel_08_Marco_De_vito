<x-main>
    <x-slot:title>
        Libreria
    </x-slot>
    
    <h1>
        @auth
        Benvenuto {{Auth::user()->name}}
        @else
        Benvenuto
        @endauth
    </h1>
</x-main>