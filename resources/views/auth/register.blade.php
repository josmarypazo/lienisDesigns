@extends('layouts.app')

@extends('base')

@section('customStyles')
  <link rel="stylesheet" href="/css/registro.css">
@endsection

@section('pageTitle', 'Registro')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:rgba(255,255,255, 0);">
                <div class="card-header" style="text-align:center;">REGÍSTRATE</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                <div class="form-group row">
                      <label for="fullName" class="col-md-4 col-form-label text-md-right">Nombre Completo</label>

                <div class="col-md-6">
                      <input id="fullName" type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" autocomplete="fullName" autofocus>

                @error('fullName')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>


                <div class="form-group row">
                    <label for="user" class="col-md-4 col-form-label text-md-right">Nombre de Usuario</label>

                <div class="col-md-6">
                    <input id="user" type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" autocomplete="user" autofocus>

                @error('user')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                @enderror
                </div>
                </div>

                <div class="form-group row">
                      <label for="birthdate" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                <div class="col-md-6">
                      <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>

                @error('birthdate')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>

                <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                @enderror
                  </div>
                  </div>

                <div class="form-group row">
                     <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                @enderror
                    </div>
                </div>

                <div class="form-group row">
                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Repite contraseña</label>

                <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                     </div>
              </div>
              *PAÍS*

              <div class="form-group row">
                  <label for="country" class="col-md-4 col-form-label text-md-right">País de nacimiento</label>

              <div class="col-md-6">
                <select id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country" autofocus>>
                  <option>Elige un país</option>


                </select>

              @error('country')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
              @enderror
              </div>
              </div>
              *PAÍS*

              <div class="form-group row">
                   <label for="avatar" class="col-md-4 col-form-label text-md-right">Imagen de perfil</label>

              <div class="col-md-6">
                    <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" autocomplete="avatar">

              @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
              @enderror
                  </div>
              </div>

                  <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
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
@endsection
