<x-main>
    <form action="{{ route('login') }}" method="POST" class="container border rounded p-3">
        @csrf
        <label for="email">E-mail</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control">
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        
        <p class="mt-3">Non sei ancora registrato? <a href="{{ route('register') }}">Registrati</a></p>
        <button type="submit">Entra</button>
    </form>
</x-main>
