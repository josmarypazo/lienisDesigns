@extends('base')

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
@endsection

@section('pageTitle', 'Registro')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('mainContent')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    <div class="title">REGÍSTRATE</div>

                    <div class="">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="form">
                            @csrf



                    <div class="form-group row">
                          <label for="fullName" class="col-md-4 col-form-label text-md-right">Nombre Completo</label>

                    <div class="col-md-4">
                          <input id="fullName" type="text" class="form-control @error('fullName') is-invalid @enderror"
                           name="fullName" value="{{ old('fullName') }}" autocomplete="fullName" autofocus
                           placeholder="Ingresá tu nombre completo">

                    @error('fullName')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>


                    <div class="form-group row">
                        <label for="user" class="col-md-4 col-form-label text-md-right">Nombre de Usuario</label>

                    <div class="col-md-4">
                        <input id="user" type="text" class="form-control @error('user') is-invalid @enderror"
                         name="user" value="{{ old('user') }}" autocomplete="user" autofocus
                         placeholder="Elegí un nombre de usuario">

                    @error('user')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                    @enderror
                    </div>
                    </div>

                    <div class="form-group row">
                          <label for="birthdate" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                    <div class="col-md-4">
                          <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror"
                            name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>

                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>

                    <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                    <div class="col-md-4">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                          name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Ingresá tu email">

                    @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                    @enderror
                      </div>
                      </div>

                    <div class="form-group row">
                         <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                    <div class="col-md-4">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" autocomplete="new-password" placeholder="Ingresar contraseña">

                    @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                    @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Repite contraseña</label>

                    <div class="col-md-4">
                          <input id="password-confirm" type="password" class="form-control"
                          name="password_confirmation" autocomplete="new-password" placeholder="Repetir contraseña">
                         </div>
                  </div>
                  <div class="form-group row">
                      <label for="country" class="col-md-4 col-form-label text-md-right">País de nacimiento</label>

                  <div class="col-md-4">
                    <select id="country" type="text" value="" class="form-control @error('country') is-invalid @enderror"
                      name="country" autocomplete="country" autofocus>>
                      <option>Elige un país</option>

                      </select>

                  @error('country')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                  </div>
                  </div>
                  <div class="form-group row" id="state" style="display:none">
                      <label id="state" for="state"
                      class="col-md-4 col-form-label text-md-right">Ciudad de nacimiento</label>

                  <div class="col-md-4">
                    <select style="display:none" type="text" class="form-control @error('state') is-invalid @enderror"
                      name="state" value="{{ old('state') }}" autocomplete="state" autofocus>>
                      <option>Elige una ciudad</option>


                    </select>

                  @error('state')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                  </div>
                  </div>


                  <div class="form-group row">
                       <label for="avatar" class="col-md-4 text-md-right">Imagen de perfil</label>

                  <div class="col-md-4">
                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror"
                          name="avatar" autocomplete="avatar">

                  @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                      </div>
                  </div>

                      <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4">
                        <button class="registro" type="submit" name="Registrarme" class="btn btn-primary">
                                {{ __('Regístrate') }}
                        </button>

                        <button class="cancelar" type="reset" name="Cancelar" class="btn btn-primary">
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
    <script src="js/countries.js"></script>
    <script src="js/validacion.js"></script>
  </body>
</html>

@endsection
