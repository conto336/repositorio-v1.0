<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-bar">
    <a class="navbar-brand" href="/">
        <img class="img-fluid" src="{{ asset('images/Logo-utilidades/LogoUNAN.png') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{request()->routeIs('home') ? 'active': ''}}">
                <a class="nav-link" href="/"><i class="fa fa-home"></i> Inicio <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('library') ? 'active': ''}}" href="{{ route('library') }}"><i class="fas fa-hdd"></i> Archivos</a>
            </li>
            @if (Route::has('login'))
            {{-- Menu Dropdowm --}}
            @auth
                <li class="nav-item dropdown user-menu">
                    <a class="nav-link dropdown-toggle avatar" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&amp;color=7F9CF5&amp;background=EBF4FF"
                            class="user-image img-circle elevation-2" alt="CARLOS JERONIMO">
                        <span class="d-none d-md-inline"> 
                        
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                       @if (Auth::user()->id === 1)
                            <a class="dropdown-item" href="{{ route('admin.home') }}">
                                Administación <i class="fas fa-users-cog"></i> 
                            </a>
                        @endif
                            <a class="dropdown-item" href="{{ route('profile.show') }}">Perfil <i
                                    class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"> Cerrar sesión
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </form>
                    </div>
                </li>

            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Ingresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('about') }}" tabindex="-1" aria-disabled="true">
                        <i class="fas fa-question-circle"></i> Acerca de Nosotros
                    </a>
                </li>
            @endauth
            @endif
        </ul>
       
            <form action="" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="query" type="text" placeholder="Buscar documento ..." aria-label="Search">
                <button class="btn btn-outline-customized my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
       
    </div>
</nav>
