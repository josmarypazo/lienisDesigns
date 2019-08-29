<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProfileController extends Controller
{
  public function edit($id)
  {
    $userToEdit = User::find($id);
    $vac = compact("userToEdit", "id");
    return redirect("/perfil_usuario/edit", $vac);
  }

  public function update($id, Request $request)
  {
    $userToUpdate = Profile::find($id);
    $userToUpdate->fullName = $request["fullName"];
    $userToUpdate->user = $request["user"];
    $userToUpdate->email = $request["email"];
    $userToUpdate->avatar = $request["avatar"];

    //Armamos un nombre único para la imagen
    $finalImage = uniqid("img_") . "." . $userToUpdate->avatar->extension();

    //Subimos el archivo en la carpeta public/img
    $userToUpdate->avatar->storePubliclyAs("/public/img", $finalAvatar);

    //Asignamos la imagen al user que guardamos
    $userToUpdate->avatar = $finalAvatar;
    $userToUpdate->save();

    return redirect("/perfil_usuario");
  }
}
