@extends('base')

@section('mainContent')

@section('pageTitle', 'Resetea tu contraseña')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Resetea tu contraseña') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('fknsnfksjfksjfks') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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


<style>
.slogan {color: RGB(46, 139, 87);}

.navbar{
margin-top: 20px;
background-color: rgba(234, 250, 241, 0.43);
align-content: center;
}

li { align-items: center;}

.nav-linkk {padding: 10px;}
.nav-link {margin: auto;}

 .dropdown-menu { background-color: rgba(234, 250, 241, 0.43);}


 @media (min-width:768px) {
   .navbar{ font-size: 16px; }
   .nav-linkk {margin-left: 10px;}
   .nav-link {margin-left: 5px;}
}

@media (min-width:1200px) {
  .navbar{   font-size: 22px; }
    .nav-linkk { margin-left: 40px; }
    .nav-link { margin-left: 15px; }
    .navbar{ font-size: 20px; }
}


.navbarf  {
display: flex;
align-items: center;
width: 100%;
justify-content: center;
margin: 15px 0 15px;
background-color: rgba(234, 250, 241, 0.43);
color: RGB(46, 139, 87);
   }

.nav-linkf i, .nav-itemf  {
  flex-wrap: nowrap;
  justify-content: space-between;
}

   .nav-linkf {
     margin-top: 35px;
     margin-left: 10px;
     }

   h3 {
     color: RGB(46, 139, 87);
     font-size: 20px;
     align-items: center;
   }

         @media (min-width:768px) {
           h3 {
              font-size: 24px;
           }
   }

</style>
