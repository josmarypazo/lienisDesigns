@extends('base')

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
@endsection


@section('pageTitle', 'Productos')

@section('mainContent')
  <div class="container">
    <h3>{{ $category->name }}</h3>
    @foreach ($products as $product)
      <div class="col-xs-12 col-md-6 col-lg-4" style="padding:5px">
        <div class="unProducto" style="background-color: rgba(234, 250, 241, 0.23); border-radius: 15px;">
          <img src="/storage/img/{{ $product->image }}" class="card-img-top" alt="Imagen del producto" width="100%" height="100%" width="90%" height="90%" style="border-radius:5%">
          <div class="card-body">
            <h3 class="card-title"> {{ $product->name }}</h3>
            <h5 class="card-text">{{ substr($product->description, 0, 90) }}...</h5>
            <h5 class="card-text">${{ $product->price }}</h5>
            <a href="/products/{{ $product->id }}" class="btn btn-success">Ver detalle</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <a href="/products/create" class="btn btn-primary">Crear producto</a>


@endsection
