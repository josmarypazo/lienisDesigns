@php
  use App\Category;
  $categories = Category::all();
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="css/navbar.css" rel="stylesheet">

    <div class="container-nav">
      <div class="navbar">
      <nav class="navbar-expand-md">
    <ul class="navbar-nav">
      <li class="nav-item">
      <form class="" action="/products" method="get">
        @csrf
        <span><i class="fa fa-search"></i></span>
        <input class="inputs" type="search" id="search" name="buscador" placeholder="Buscar..." />
      </form>

          </li>
    <li class="nav-item">
      <a class="nav-link" href="/">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/quiensoy">¿Quién soy?</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/faq">Preguntas frecuentes</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="/products" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Productos
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="/products">Todos</a>
        @foreach ($categories as $category)
            <a class="dropdown-item" href="/products/category/{{ $category->id }}">{{ $category->name }}</a>
        @endforeach
      </div>
    </li>

      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item"><a class="nav-link" href="/register">Registro</a></li>
          <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->fullName }} <img src="/storage/img/{{ Auth::user()->avatar }}" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 5px;">

            </a>
            <div class="dropdown-menu" aria-labelledby="dropNavBar">
              <a class="dropdown-item" href="/perfil_usuario">Mi perfil</a>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Salir</button>
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
    <script src="{{ asset('js/app.js') }}" defer></script>
