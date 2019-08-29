<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function edit($id)
  {
    $profileToEdit = Profile::find($id);
    $vac = compact("profileToEdit", "user");
    return view("/pusuario-edit", $vac);
  }

  public function update($id, Request $request)
  {
    $profileToUpdate = Profile::find($id);
    $profileToUpdate->fullName = $request["fullName"];
    $profileToUpdate->user = $request["user"];
    $profileToUpdate->email = $request["email"];
    $profileToUpdate->avatar = $request["avatar"];

    //Armamos un nombre único para la imagen
    $finalImage = uniqid("img_") . "." . $profileToUpdate->image->extension();

    //Subimos el archivo en la carpeta public/img
    $profileToUpdate->image->storePubliclyAs("public/img", $finalImage);

    //Asignamos la imagen al profileo que guardamos
    $profileToUpdate->image = $finalImage;
    $profileToUpdate->save();

    return redirect("/perfil_usuario");
  }
}
