@extends('base')

@section('pageTitle', 'Resultado de la búsqueda')

@section('mainContent')
  <div class="container">
    @foreach ($products as $product)
      <div class="col-xs-12 col-md-6 col-lg-4" style="padding:5px">
        <div class="unProducto">
          <img src="/storage/img/{{ $product->image }}" class="card-img-top" alt="Imagen del producto" width="100%" height="100%" width="90%" height="90%" style="border-radius:5%">
          <div class="card-body">
            <h5 class="card-title"> {{ $product->name }}</h5>
            <p class="card-text">{{ substr($product->description, 0, 90) }}...</p>
            <p class="card-text">${{ $product->price }}</p>
            <a href="/products/{{ $product->id }}" class="btn btn-success">Ver detalle</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
