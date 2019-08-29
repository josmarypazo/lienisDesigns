@extends('base')

@section('pageTitle', $profileToEdit->fullName)

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
@endsection

@section('mainContent')

  <h2>Editando: {{ $profileToEdit->fullName }}</h2>
  <form action="/perfil_usuario/edit/ {{ $profileToEdit->id }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field("put") }}

  <div class="contenedor">
    <div class="item">
      <input class="custom-file-input" type="file" name='avatar' value="">
      <label class="custom-file-label">Elegí una imagen</label>
    </div>
      <div class="row">
        <div class="item">
          <div class="formulario">
            <label class="itemform">Nombre Completo: </label>
            <input class="uno form-control" type="text" name="name" value="{{ old('fullName', $profileToEdit->fullName) }}">
          </div>
        </div>
        <div>
          <label class="itemform">Nombre de usuario: </label>
          <input class="uno form-control" type="text" name="name" value="{{ old('user', $profileToEdit->user) }}">
        </div>
        <div>
          <label class="itemform">Email: </label>
          <input class="uno form-control" type="text" name="name" value="{{ old('email', $profileToEdit->email) }}">
        </div>

      <div class="col-12">
        <div class="form-group">
          <br>
          <button class="registro" type="submit" name="confirmar" value="">Confirmar</button>
          <button class="cancelar" type="reset" name="cancelar" value="">Cancelar</button>
        </div>
      </div>
      </form>
    </div>

@endsection
