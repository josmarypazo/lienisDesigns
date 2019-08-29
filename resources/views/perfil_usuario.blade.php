@extends('base')

 @section('pageTitle', 'Perfil de ' . Auth::user()->fullName)
<link rel="stylesheet" href="/css/perfil_usuario.css">

@section('mainContent')
              <div class="welcome">
              <h2>Bienvenido {{ Auth::user()->fullName }}</h2>
              </div>

              <div class="contenedor">
                <div class="item">
                  <img class="imgPerfil" src="/storage/img/{{ Auth::user()->avatar }}" width="300" style="border-radius: 50%; background-color: #ffffff; padding: 3px;">
                </div>
                <div class="item">
                  <form class="formulario">
                    <div>
                      <label class="itemform" for="">Nombre completo: {{ Auth::user()->fullName }}</h2></label>

                      </div>
                    <div>
                      <label class="itemform" for="">Nombre de Usuario: {{ Auth::user()->user }}</h2> </label>
                  </div>
                    <div>
                      <label class="itemform" for="email">Email: {{ Auth::user()->email }}</h2></label>

                    </div>
                    <div>
                      <label class="itemform" for="cambiarpass">Cambiar contraseña: <input style="margin-left: 10px;" type="checkbox"></label>

                    </div>
                    <div class="butt">
                      <button class="button" type="submit" name="button">Editar Información</button>
                    </div>
                  </form>
                </div>
              </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



      </div>
    </div>
  </div>
@endsection
