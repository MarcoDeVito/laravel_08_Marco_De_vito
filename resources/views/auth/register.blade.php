<x-main>
    <form action="{{ route('register') }}" method="POST" class="container border rounded p-3">
        @csrf
        <label for="name">Nome Utente</label>
        <input type="text" value="{{ old('name') }}" name="name" class="form-control">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="email">E-mail</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control">
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="password_confirmation">Conferma Passowrd</label>
        <input type="password" name="password_confirmation" class="form-control">
        @error('password_confirmation')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <p class="mt-3">Già registrato? <a href="{{ route('login') }}">vai al Login</a></p>
        <button type="submit">Registrati</button>
    </form>




</x-main>
