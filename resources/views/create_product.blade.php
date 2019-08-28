@extends('base')

@section('pageTitle', 'Crear producto')

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('mainContent')
  <h2>CREA UN PRODUCTO</h2>
  <form action="/products/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label>Nombre</label>
          <input class="uno form-control" type="text" name="name" placeholder= "Ingresá el nombre del producto" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Categoría</label>
          <select class="form-control" name="category_id">
            <option value="">Elegí una categoría</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}"> {{$category->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Descripción</label>
          <textarea class="uno form-control" name="description" rows="4"></textarea>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Puntuación</label>
          <input  class="uno form-control" type="number" step="0.01" min="1" max="10" name="rating" placeholder="Ejemplo: 3.5" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Precio</label>
          <input class="uno form-control" type="number" step="0.01" name='price' placeholder="Ingresá el precio" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Stock</label>
          <input class="uno form-control" type="number" name="stock" placeholder="Ingresá el stock" value="">
        </div>
      </div>
      <div class="col-6">
        <label>Imagen</label>
        <div class="custom-file">
          <input class="custom-file-input" type="file" name='image' value="">
          <label class="custom-file-label">Elegí una imagen</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <br>
          <button class="registro" type="submit" name="crear" value="">Crear</button>
          <a href="/products" class="cancelar">Cancelar</a>
        </div>
      </div>
    </div>
  </form>
@endsection
