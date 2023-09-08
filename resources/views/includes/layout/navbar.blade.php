<nav class="navbar bg-dark border-bottom border-body navbar-expand-md sticky-top" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('guest.home') }}">
            <div class="logo">
                <img class="img-fluid" src="{{ asset('img/icon.png') }}" alt="icon">
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @auth
                    {{-- Modifica videogames --}}
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('admin.videogames' . '*')) active @endif"
                            href="{{ route('admin.videogames.index') }}">{{ __('Update Videogames') }}</a>
                    </li>
                    {{-- Modifica editori --}}
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('admin.publisher' . '*')) active @endif"
                            href="{{ route('admin.publisher.index') }}">{{ __('Update Publisher') }}</a>
                    </li>
                    {{-- Modifica console --}}
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('admin.console' . '*')) active @endif"
                            href="{{ route('admin.console.index') }}">{{ __('Update Console') }}</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('guest.videogames' . '*')) active @endif"
                        href="{{ route('guest.videogames.index') }}">{{ __('Videogames') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.home') }}">{{ __('home') }}</a>
                            <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
