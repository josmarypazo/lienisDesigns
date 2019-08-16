<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta <charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <title>@yield('pageTitle') - Lienis Design</title>
  </head>

  <body @yield('bodyClass')>
    {{-- La función @include() ya sabe que está buscando un archivo dentro de resources/views    @include('partials.navbar') --}}

    {{-- @include('partials/navbar.blade.php') --}}

    {{-- Dejamos un espacio vacío para insertar el contenido de cada una de las views  @yield('mainContent') --}}


    {{-- @include('partials.footer') --}}
  </body>
  </html>
