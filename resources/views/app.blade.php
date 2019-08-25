<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta <charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - Lienis Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/inicio.css">
    @yield('customStyles')
  </head>
<div class="container">
<body @yield('bodyClass')>

          <!-- NAVBAR -->
          @include('layout')
          @include('logo')




        @yield("mainContent")

        <!-- FOOTER -->
        @include('footer')
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </body>
  </div>
</html>
