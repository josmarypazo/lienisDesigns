@extends('base')

@section('pageTitle', 'Comprando ' . $productToBuy->name)

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">


@section('mainContent')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="title" style="text-align: center">DETALLE DE TU COMPRA</div>

                <div class="">
                    <form method="POST" action="/purchase" enctype="multipart/form-data" class="form">
                        @csrf
_________________________________________

<div class="form-group row">
      <label for="product_id" class="col-md-4 col-form-label text-md-right">Producto</label>

<h3 style="margin: 5 18; color:black; font-weight: bold">{{ $productToBuy->name }}</h3>
</div>

<div class="form-group row">
      <label for="quantity" class="col-md-4 col-form-label text-md-right">Cantidad</label>

<div class="col-md-4">
      <input type="number" class="form-control"
       name="quantity" value="" autocomplete="" autofocus>

       <form action="">
         <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
       </form>
       <form action="">
         <button class="btn btn-warning" type="submit"><i class="fas fa-minus"></i></button>
       </form>
       <form action="">
           <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i></button>
       </form>

</div>
</div>

<div class="form-group row">
      <label for="total_purchase"  class="col-md-4 col-form-label text-md-right">Total</label>

<h3 style="margin: 5 18; color:black; font-weight: bold">-</h3>
</div>



<div class="form-group row mb-0">
  <div class="col-md-4 offset-md-4">
  <button class="registro" style="font-weight: bold" type="submit" name="cancelar" class="btn btn-primary">
          {{ __('Confirmar compra') }}
  </button>

  <button class="cancelar" type="reset" name="listo" class="btn btn-primary">
      {{ __('Cancelar') }}
  </button>

          </div>
      </div>
_________________________________________
                    </form>
                  </div>
              </div>
            </div>
        </div>
      </div>

</body>
@endsection
