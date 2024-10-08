<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Libreria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if (request()->routeIs('home')) active @endif" href="{{ route('home') }}">Home</a>
                <a class="nav-link @if (request()->routeIs('index')) active @endif" href="{{ route('index') }}">Elenco
                    libri</a>
                <a class="nav-link @if (request()->routeIs('book.create')) active @endif"
                    href="{{ route('book.create') }}">Aggiungi libro ad elenco</a>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        Benvenuto {{ Auth::user()->name }} <button type="submit"
                                class="btn text-nowrap">Logout</button></a>
                    </form>
                @endauth
                @guest
                    <a class="nav-link @if (request()->routeIs('login')) active @endif"
                        href="{{ route('login') }}">Accedi</a>
                    <a class="nav-link @if (request()->routeIs('register')) active @endif"
                        href="{{ route('register') }}">Registrati</a>
                @endguest

            </div>

        </div>
    </div>
</nav>
