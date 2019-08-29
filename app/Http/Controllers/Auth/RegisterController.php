<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/perfil_usuario';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullName'=> ['required', 'regex:/^[a-zA-Z\s]+$/u', 'max:255'],
            'user'=>['required', 'string', 'max:255'],
            'birthdate'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'alpha_num', 'min:6', 'regex:/DH/i'],
            'country'=>['required'],
            'avatar'=>['required', 'image', 'mimes:jpg,png,jpeg'],
        ], [

          'fullName.required' => 'El campo nombre no puede estar vacío',
          'fullName.regex'=>'El campo nombre debe contener solo letras. Permite espacios pero no tildes',
          'user.required'=>'El usuario es obligatorio',
    			'birthdate.required'=>'La fecha de nacimiento es obligatoria',
    			'email.required'=>'El email es obligatorio',
          'email.email'=>'Escribe un formato de email válido',
          'email.unique:users'=>'Este email ya está registrado',
          'password.required'=>'La contraseña es obligatoria',
          'password.min'=>'La contraseña debe tener mínimo 6 caracteres',
          'password.alpha_num'=>'La contraseña no puede contener espacios',
          'password.regex'=>'La contraseña debe contener las siglas DH en mayúsculas',
          'country.required' => 'El país de nacimiento es obligatorio',
          'avatar.required' => 'La foto de perfil es obligatoria',
          'avatar.image'=>"El archivo debe ser una imagen",
          'avatar.mimes'=>"Las formatos permitidos son jpg, png, jpeg",
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @retEl archivo debe ser una imagen
      *
      **/
    protected function create(array $data)
    {
        return User::create([

          // $ruta = $data->file("avatar")->store("public"),
          // nos da la ruta entera donde se va a guardar el archivo
          // $nombreArchivo = basename($ruta),
          //para que recorte la ruta y de el nombre nada mas

            'fullName'=> $data['fullName'],
            'user'=>$data['user'],
            'birthdate'=>$data['birthdate'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password']),
            'country'=>$data['country'],
            'state'=> isset($data['state']) ? $data['state'] : null,
            'avatar'=>$data['avatar'],
// 'avatar'=>$data['avatar'] = $nombreArchivo,


        ]);
    }
}
