
{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Home')

@section('cssLink', '/css/bootstrap.min.css')

@section('mainContent')


  <body>
@section('pageTitle', 'Home')
    <div class="container">
      <div class="row">
      <!-- cabecera -->
    <header class="cabecera">

<!-- BARRA DE NAVEGACION PRINCIPAL -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</header>

<!-- carousel -->

<div class="container-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
<a href="https://www.losandes.com.ar/article/consejos-para-combinar-maquillaje-y-ropa-con-exito" target="_blank"><img src="img\slide1.jpg" alt="Maquillaje y accesorios" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="http://comocombinar.com/como-combinar-la-ropa-y-los-accesorios-consejos-y-trucos-para-combinar-mejor/" target="_blank"><img src="img\slide2.jpg" alt="Algunos consejos" style="width:100%;"></a>
      </div>

      <div class="item">
  <a href="https://genial.guru/inspiracion-mujer/10-reglas-claves-a-la-hora-de-elegir-accesorios-313510/" target="_blank"><img src="img\slide3.jpg" alt="Reglas claves para elegir accesorios" style="width:100%;"></a>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- productos -->
<div class="tendencias">
  <h2>TENDENCIAS 2019</h2>
</div>
</section >
<div class="products-container">
    <div class="lista-productos">
      <div class="unProducto">
        <img src="img/img_1353.png" alt="Imagen del producto" width="100%" height="100%">

        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1354.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1355.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1356.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
      <div class="unProducto">
        <img src="img/img_1362.png" alt="Imagen del producto" width="100%" height="100%">
        <!-- <h4><b>Nombre del producto</b></h4>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></p> -->
      </div>
    </div>
  </div>

<!-- AGREGAR FOOTER -->

</div>
</div>
</div>
  </body>
</html>
