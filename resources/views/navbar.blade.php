
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="css/navbar.css" rel="stylesheet">
    <!-- Scripts -->

    <div class="container-nav">
      <div class="navbar">

      <nav class="navbar-expand-md">
    <ul class="navbar-nav">
<li class="nav-item">
        <span><i class="fa fa-search"></i></span>
        <input class="inputs" type="search" id="search" placeholder="Buscar..." />
        </a>  </li>
        {{-- <li class="nav-item">
        <a href="#" class="carro"><i class="fas fa-shopping-cart"></i></a>
        </li> --}}


    <li class="nav-item">
      <a class="nav-link" href="index">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="quiensoy">¿Quién soy?</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="faq">Preguntas frecuentes</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="/products" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Productos
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="/products">Collares</a>
        <a class="dropdown-item" href="/products">Minibags</a>
        <a class="dropdown-item" href="/products">Para ellos</a>
        <a class="dropdown-item" href="/products">Pulseras</a>
        <a class="dropdown-item" href="/products">Zarcillos</a>
      </div>
    </li>

      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item" >
              <a class="nav-linkk" href="{{ route('login') }}" customer>{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item" customer>
                  <a class="nav-linkk" href="{{ route('register') }}" customer>{{ __('Registro') }}</a>
                </li>
            @endif
        @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
              </div>
                  </li>
              @endguest

              @auth
              </nav>
              <nav class=" navbar-expand-lg" style="align-items: flex-end;">
              <li class="nav-item" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{-- Auth::user()->avatar --}} /img/img_1353.png" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 3px;">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropNavBar">
                      <a class="dropdown-item" href="/perfil_usuario">Mi perfil</a>
                      <a class="dropdown-item" href=" ">Salir</a>
                  </nav>
              @endauth

          </ul>
      </div>
        </nav>
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
