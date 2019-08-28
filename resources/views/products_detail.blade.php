@extends('base')

@section('pageTitle', $productToFind->name)

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('mainContent')
  <div class="container">
    <div>
        <div class="col-xs-12 col-md-4 col-lg-4">
            <img src="/storage/img/{{ $productToFind->image }}" alt="Imagen del producto" width="90%" height="90%" style="border-radius:5%">
        </div>

        <div class="col-xs-12 col-md-8 col-lg-8">
            <h3> {{ $productToFind->name }}
            <h4>Descripción: {{ $productToFind->description }}</h4>
            <h4>Stock: {{ $productToFind->stock }}</h4>
            <h4>Puntuación: {{ $productToFind->rating }} </h4>
            <h4>Precio: ${{ $productToFind->price }}</h4>
            {{-- @auth --}}
                <form action="/products/{{ $productToFind->id }}" method="POST" style="display:inline">
            <a href="/products/purchase/{{ $productToFind->id }}" class="btn btn-success">COMPRAR</a>


                    @csrf
                    {{ method_field("delete") }}
                    <button type="submit" class="btn btn-danger">BORRAR</button>
                    <a href="/products/edit/{{ $productToFind->id }}" class="btn badge-warning">EDITAR</a>
                </form>
            {{-- @endauth --}}
        </div>
    </div>

  </div>


@endsection
