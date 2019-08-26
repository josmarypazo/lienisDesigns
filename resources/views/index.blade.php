@extends('base')

@section('pageTitle', 'Home')

        @section('mainContent')
<!-- carousel -->
<div class="container-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img\slide1.png" alt="Lieni Tips" style="width:100%;">
      </div>
      <div class="item">
        <img src="img\slide2.png" alt="Lieni Tips" style="width:100%;">
      </div>
      <div class="item">
        <img src="img\slide3.png" alt="Lieni Tips" style="width:100%;">
      </div>
      <div class="item">
        <img src="img\slide4.png" alt="Lieni Tips" style="width:100%;">
      </div>
      <div class="item">
        <img src="img\slide5.png" alt="Lieni Tips" style="width:100%;">
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
  <h2>LOS MÁS VENDIDOS</h2>
</div>
<div class="fotos">
      <div class="col-xs-12 col-md-6 col-lg-4">
        <img class="foto" src="img/img_1353.png" alt="Imagen del producto" width="100%" height="100%">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <img class="foto" src="img/img_1354.png" alt="Imagen del producto" width="100%" height="100%">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <img class="foto" src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <img class="foto" src="img/img_1356.png" alt="Imagen del producto" width="100%" height="100%">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <img class="foto" src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <img class="foto" src="img/img_1362.png" alt="Imagen del producto" width="100%" height="100%">
      </div>
      </div>
      @section('customStyles')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      @endsection
@endsection
