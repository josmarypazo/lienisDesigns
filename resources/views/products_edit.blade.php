@extends('base')

@section('pageTitle', $productToEdit->name)

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">

@endsection

@section('mainContent')
  <h2>Editando: {{ $productToEdit->name }}</h2>
  <form action="/products/edit/ {{ $productToEdit->id }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field("put") }}
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label>Nombre</label>
          <input class="uno form-control" type="text" name="name" value="{{ old('name', $productToEdit->name) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Categoría</label>
          <select class="form-control" name="category_id">
            <option value="">Elegí una categoría</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ $productToEdit->category_id == $category->id ? 'selected' : null }}> {{$category->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-6">
        <div class="form-group">
          <label>Descripción</label>
          <textarea class="uno form-control" name="description" rows="4"> {{ old('description', $productToEdit->description) }} </textarea>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Puntuación</label>
          <input  class="uno form-control" type="number" step="0.01" min="1" max="10" name="rating" value= "{{ old('rating', $productToEdit->rating) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Precio</label>
          <input class="uno form-control" type="number" step="0.01" name='price' value= "{{ old('price', $productToEdit->price) }}">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label>Stock</label>
          <input class="uno form-control" type="number" name="stock" value= "{{ old('stock', $productToEdit->stock) }}">
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
          <button class="registro" type="submit" name="guardar" value="">Guardar</button>
          <button class="cancelar" type="reset" name="cancelar" value="">Cancelar</button>
        </div>
      </div>
    </div>
  </form>
@endsection