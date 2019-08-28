@extends('base')

@section('pageTitle', 'Comprando ' . $productToBuy->name)

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">

<meta name="csrf-token" content="{{ csrf_token() }}">
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="title" style="text-align: center">DETALLE DE TU COMPRA</div>

                <div class="">
                    <form method="POST" enctype="multipart/form-data" class="form">
                        @csrf

<div class="form-group row">
      <label for="product_id" class="col-md-4 col-form-label text-md-right">Producto</label>

<h3 style="margin: 5 18; color:black; font-weight: bold">{{ $productToBuy->name }}</h3>
</div>

<div class="form-group row">
      <label for="quantity" class="col-md-4 col-form-label text-md-right">Cantidad</label>
      <h3 style="margin: 5 18; color:black; font-weight: bold">{{ $quantity }}</h3>

</div>

<div class="form-group row">
      <label for="total_purchase"  class="col-md-4 col-form-label text-md-right">Total</label>

<h3 style="margin: 5 18; color:black; font-weight: bold">{{$total_purchase}}</h3>
</div>



<div class="form-group row mb-0">
  <div class="col-md-4 offset-md-4">
  <button class="registro" style="font-weight: bold" type="submit" name="comprar">
          {{ __('Confirmar compra') }}
  </button>

  <button class="cancelar" type="reset" name="cancelar">
      {{ __('Cancelar') }}
  </button>

          </div>
      </div>

                    </form>
                  </div>
              </div>
            </div>
        </div>
      </div>

<script src="/js/purchase.js"></script>
@endsection
