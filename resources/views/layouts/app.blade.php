<!-- Navigation-->
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                @if (Route::is('velamar.sas.developers'))
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::is('velamar.sas.home') ? 'active' : '' }}"
                        href="{{ route('velamar.sas.home') }}" wire:navigate>
                        {{ trans('menu.home') }}
                    </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded active"
                        href="{{ route('velamar.sas.developers') }}">
                        {{ trans('menu.developer') }}
                    </a>
                </li>
                @else
                <!-- Authentication Links -->
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::is('velamar.sas.home') ? 'active' : '' }}"
                        href="{{ route('velamar.sas.home') }}" wire:navigate>
                        {{ trans('menu.home') }}
                    </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::is('velamar.sas.about') ? 'active' : '' }}"
                        href="{{ route('velamar.sas.about') }}" wire:navigate>
                        {{ trans('menu.about') }}
                    </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::is('velamar.sas.products') ? 'active' : '' }}"
                        href="{{ route('velamar.sas.products') }}">
                        {{ trans('menu.Products & Services') }}
                    </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::is('velamar.sas.blog') ? 'active' : '' }}"
                        href="{{ route('velamar.sas.blog') }}" wire:navigate>Blog</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::is('velamar.sas.contact') ? 'active' : '' }}"
                        href="{{ route('velamar.sas.contact') }}" wire:navigate>{{ trans('menu.contact') }}</a>
                </li>
                @endif
                @guest
                @else
                <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a id="navbarDropdown" class="nav-link py-3 px-0 px-lg-3 rounded dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ trans('menu.Logout') }}
                        </a>

                        <a class="dropdown-item {{ Route::is('applications') ? 'active' : '' }}"
                            href="{{ route('sas.applications') }}">{{ trans('menu.Applications') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
                <li class="nav-item mx-0 mx-lg-1 mt-2">
                    <a href="{{ url('lang', ['es']) }}" style="text-decoration: none;"><img
                            src="../images/español.webp" alt="Spanish Flag" width="30" height="20"></a>
                </li>
                <li class="nav-item mx-0 mx-lg-1 mt-2">
                    <a href="{{ url('lang', ['en']) }}" style="text-decoration: none;"><img
                            src="../images/ingles.png" alt="English Flag" width="30" height="20"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
