<x-main>
    <x-slot:title>
        {{ $book->title }}
    </x-slot>
    <section class="container">
        <h1 class="text-center mb-5">{{ $book->title }}</h1>
        @if ($book->image)
            <img class="img-fluid m-5" style="height:50vh" src="{{ Storage::url($book->image) }}" alt="Copertina Libro">
        @endif
        <p class="ms-5">Anno di pubblicazione: <strong>{{ $book->years }}</strong></p>
        <p class="ms-5">Numero di pagine: <strong>{{ $book->pages }}</strong></p>
    </section>
</x-main>
