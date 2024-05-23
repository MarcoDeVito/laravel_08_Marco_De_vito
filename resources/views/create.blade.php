<x-main>
    <x-slot:title>
        Aggiungi libro
    </x-slot>
    <div class="container my-5">
        @if (session('success'))
            <p class="text-info"> {{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-floating">
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}"
                    placeholder='prova'>
                <label for="name" class="form-label">Titolo</label>
                @error('title')
                    <p class=".text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="number" name="years" class="form-control" id="years" value="{{ old('years') }}"
                    placeholder='prova'>
                <label for="years" class="form-label">Anno di pubblicazione</label>
                @error('years')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="number" name="pages" class="form-control" id="pages" value="{{ old('pages') }}"
                    placeholder='prova'>
                <label for="pages" class="form-label">Pagine</label>
                @error('pages')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="file" name="image" class="form-control" placeholder='prova'>
                <label for="pages" class="form-label">Immagine</label>
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-main>
