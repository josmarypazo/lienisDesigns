@extends('base')

@section('pageTitle', 'Crear producto')

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">

@endsection

@section('mainContent')
  <h2>CREA UN PRODUCTO</h2>
  <form method="post" >
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
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Descripción</label>
          <textarea class="uno form-control" name="description" rows="3"></textarea>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Rating</label>
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
        <div class="form-group">
          <label>Imagen</label>
          <input class="form-control-file" type="file" name='image' value="">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <br>
          <button class="registro" type="submit" name="crear" value="">Crear</button>
          <button class="cancelar" type="reset" name="Cancelar" value="">Cancelar</button>
        </div>
      </div>
  </form>
@endsection
