@extends('base')

@section('pageTitle', 'Login')

@section("mainContent")

@section('customStyles')
  <link rel="stylesheet" href="/css/login.css">
@endsection

@section("mainContent")
<div class="formulario">
    <h2>BIENVENIDO</h2>
<form method="post">
    <div class="item">
      <label for="email" type="email" value="Email">E-mail:</label>
      <input class="email" type="text" name="email" placeholder="E-mail" value="">
    </div>
    <div class="item">
      <label for="pass" type="password">Contraseña:</label>
      <input class="pass" type="password" name="pass" placeholder="Password" value="">
    </div>
    <br>
    <input class="Recordarme" type="checkbox" name="Recordarme" value="Recordarme">Recordarme
    <br>
    <button class="ingresar" type="submit" name="Registrarme" value="Ingresar">Ingresar</button>
    <p>¿Aún no tenés cuenta? <a href="registro.php"><b>Registrate</b></a></p>
  </form>

</div>
@endsection
