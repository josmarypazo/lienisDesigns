@section('pageTitle', 'Perfil Usuario')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta <charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - Lienis Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/perfil_usuario.css">
    @yield('customStyles')
  </head>

<div class="container">
<body @yield('bodyClass')>

  <div class="navbar" >
      <nav class=" navbar-expand-lg" style="align-items: flex-start;">
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index">Inicio</a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" href="quiensoy">¿Quién soy?</a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" href="faq">Preguntas frecuentes</a>
    </li>
    <li class="nav-item dropdown" >
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Productos        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="productos">Collares</a>
        <a class="dropdown-item" href="productos">Minibags</a>
        <a class="dropdown-item" href="productos">Para ellos</a>
        <a class="dropdown-item" href="productos">Pulseras</a>
        <a class="dropdown-item" href="productos">Zarcillos</a>
      </div>
    </li>
    </nav>
    <nav class=" navbar-expand-lg" style="align-items: flex-end;">
    <ul class="navbar-nav">
    <li class="nav-item" >
      <span><i class="fa fa-search"></i></span>
      <input class="inputs" type="search" id="search" placeholder="Buscar..." />
    </a>  </li>
    <li class="nav-item" >
          <a href="#" class="carro"><i class="fas fa-shopping-cart"></i></a>
    </li>
    <li class="nav-item" >
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="/img/img_1353.png" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 3px;">
          </a>
          <div class="dropdown-menu" aria-labelledby="dropNavBar">
            <a class="dropdown-item" href="perfil_usuario.php">Mi perfil</a>
            <a class="dropdown-item" href=" ">Salir</a>
        </nav>
    </div>

              <div class="welcome" style="color: RGB(46, 139, 87);">
              <h2>Bienvenido USUARIO</h2>
              </div>

              <!-- NAVBAR -->
              @include('logo')


              <div class="contenedor">
                <div class="item">
                  <img class="imgPerfil" src=" ">
                </div>
                <div class="item">
                  <form class="formulario">
                    <div>
                      <label for="">Nombre completo:  </label>

                      </div>
                    <div>
                      <label for="">Nombre de Usuario: </label>
                  </div>
                    <div>
                      <label for="email">Email: </label>

                    </div>
                    <div>
                      <label for="cambiarpass">Cambiar contraseña:</label>
                      <input type="checkbox">
                    </div>
                    <div class="butt">
                      <button class="button" type="submit" name="button">Editar Información</button>
                    </div>
                  </form>
                </div>
              </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- FOOTER -->
        @include('footer')
      </div>
    </div>
  </div>
  </body>
</html>
