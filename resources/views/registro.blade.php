@extends('base')

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
@endsection

@section('pageTitle', 'Registro')

@section("mainContent")
  <div class="container" style="align-items: center;">
  <h2>REGISTRATE!</h2>
  <form method="post" >
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label>Nombre Completo</label>
          <input class="uno" type="text" name="fullName" value="   Ingresá tu nombre completo">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="nombre" type="usuario">Nombre de Usuario</label>
          <input  class="uno" type="text" name="user" placeholder="   Elegí un nombre de usuario" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="fecha" type="fecha">Fecha de Nacimiento</label>
          <input class="uno" type="date" name="birthdate" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for='email' type='text'>E-mail</label>
          <input class="uno" type='text' name='email' placeholder="   Ingresá tu email" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="password" type="password">Contraseña</label>
          <input class="uno" type="password" name="pass" placeholder="   Ingresar contraseña" value="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="pass" type="pass"> Repetir contraseña</label>
          <input class="uno" type="password" name="rePass" placeholder="   Repetir contraseña" value="">
        </div>
      </div>

      <div class="col-6">
        <div class="form-group">
          <label class="imgperfil"><b>Imagen de perfil:</b></label>
          <input type="file" name='avatar' class="file" value="">
        </div>
      </div>

      <div class="col-6"  style="margin-top: 15px;">
        <div class="form-group">
          <label class="pais" for="pais">País de Nacimiento</label>
          <br>
            <select name="pais" value="" class="col-6">
              <option value="ar"> Argentina</option>
              <option value="br"> Brasil</option>
              <option value="bo"> Bolivia</option>
              <option value="cl"> Chile</option>
              <option value="co"> Colombia</option>
              <option value="ec"> Ecuador</option>
              <option value="pe"> Perú</option>
              <option value="ve"> Venezuela</option>
              <option value="ot"> Otro</option>
        </div>
      </div>

            {{-- <div class="col-6">
              <div class="form-group">
                <label class="imgperfil"><b>Imagen de perfil:</b></label>
                <input type="file" name='avatar' class="file" value="">
              </div>
            </div> --}}

      <div class="col-12">
        <div class="form-group">
          <br>
          <button class="registro" type="submit" name="Registrarme" value="">Registrarme</button>
          <button class="cancelar" type="reset" name="Cancelar" value="">Cancelar</button>
        </div>
      </div>
  </form>
@endsection
