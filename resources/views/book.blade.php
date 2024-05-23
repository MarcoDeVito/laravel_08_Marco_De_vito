<x-main>
    <x-slot:title>
        Elenco libri
    </x-slot>
    {{-- @dd($books) --}}
    @if (session('success'))
        <p class="text-info"> {{ session('success') }}</p>
    @endif
    <ul class="m-5 d-flex flex-wrap justify-content-center ">
        
        @forelse ($books as $book)
        <div class="card mx-2" style="width: 18rem;">
            <img src="{{Storage::url($book->image)}}" class="card-img-top" alt="immagine libro">
            <div class="card-body">
              <h5 class="card-title text-center ">{{$book->title}}</h5>
              <div class="text-center">
                  <span class="card-text"><strong>Anno: </strong>{{$book->years}}</span>
                  <span class="card-text"><strong>Pagine: </strong>{{$book->pages}}</span>
                </div>
                <div class="text-center mt-5"><a href="{{ route('show', ['book' => $book->id]) }}" class="btn btn-primary">Dettagli</a></div>
              {{-- <p>{{$book->id}}</p> --}}
            </div>
          </div>
        @empty
            <p>Nessun libro presente</p>
        @endforelse
    </ul>
</x-main>
