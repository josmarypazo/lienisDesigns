@extends('base')

@section('pageTitle', 'Productos')

@section('customStyles')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection

  <body>
        @section('mainContent')
          <div class="container">
            <div class="products-container">
                <div class="lista-productos">
                  <div class="unProducto">
                    <img src="img/img_1353.png" alt="Imagen del producto" width="100%" height="100%">
                  </div>
                  <div class="unProducto">
                    <img src="img/img_1354.png" alt="Imagen del producto" width="100%" height="100%">
                  </div>
                  <div class="unProducto">
                    <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
                  </div>
                  <div class="unProducto">
                    <img src="img/img_1356.png" alt="Imagen del producto" width="100%" height="100%">
                  </div>
                  <div class="unProducto">
                    <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
                  </div>
                  <div class="unProducto">
                    <img src="img/img_1362.png" alt="Imagen del producto" width="100%" height="100%">
                  </div>
          </div>
          </div>


@endsection
  </body>



{{--
@extends('base')

@section('pageTitle', 'Productos')
  <body>
@section('mainContent')
<div class="container">
  <div class="products-container">
      <div class="lista-productos">
        <div class="unProducto">
          <img src="img/img_1353.png" alt="Imagen del producto" width="100%" height="100%">
        </div>
        <div class="unProducto">
          <img src="img/img_1354.png" alt="Imagen del producto" width="100%" height="100%">
        </div>
        <div class="unProducto">
          <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
        </div>
        <div class="unProducto">
          <img src="img/img_1356.png" alt="Imagen del producto" width="100%" height="100%">
        </div>
        <div class="unProducto">
          <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
        </div>
        <div class="unProducto">
          <img src="img/img_1362.png" alt="Imagen del producto" width="100%" height="100%">
        </div>
</div>
</div>


@section('mainContent')
  </div>
  </body>
</html> --}}
