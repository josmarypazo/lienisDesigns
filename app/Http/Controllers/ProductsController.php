<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\product_shoppingCart;
use App\Http\Middleware\isAdmin;

class ProductsController extends Controller
{
  public function list()
  {
    $products = Product::paginate(3);
    $vac = compact("products");

    return view("products", $vac)->withProducts($products);
  }

  public function categoria($category_id)
  {
    $category = Category::find($category_id);
    $products = $category->products;

    return view("productsByCategory", compact('category', 'products'));
  }

  public function create()
  {
    $categories = Category::orderBy("name")->get();
    $vac = compact("categories");
   return view("create_product", $vac);
  }

  public function store(Request $request)
  {
    //Guardamos lo que llega del form a la bd
    $productSaved = Product::create($request->all());

    $image = $request["image"];

    //Armamos un nombre único para la imagen
    $finalImage = uniqid("img_") . "." . $image->extension();

    //Subimos el archivo en la carpeta public/img
    $image->storePubliclyAs("/storage//img", $finalImage);

    //Asignamos la imagen al producto que guardamos
    $productSaved->image = $finalImage;
    $productSaved->save();

    return redirect("/products");
  }

  public function detail($id)
  {
    $productToFind = Product::find($id);
    $vac = compact("productToFind");

    return view("products_detail", $vac);
  }

  public function destroy($id)
  {
    $productToDelete = Product::find($id);
    $productToDelete->delete();

    return redirect("/products");
  }

  public function edit($id)
  {
    $productToEdit = Product::find($id);
    $categories = Category::orderBy("name")->get();
    $vac = compact("productToEdit", "categories");

    return view("products_edit", $vac);
  }

  public function update($id, Request $request)
  {
    $productToUpdate = Product::find($id);
    $productToUpdate->name = $request["name"];
    $productToUpdate->rating = $request["rating"];
    $productToUpdate->description = $request["description"];
    $productToUpdate->price = $request["price"];
    $productToUpdate->stock = $request["stock"];
    $productToUpdate->category_id = $request["category_id"];
    $productToUpdate->image = $request["image"];

    //Armamos un nombre único para la imagen
    $finalImage = uniqid("img_") . "." . $productToUpdate->image->extension();

    //Subimos el archivo en la carpeta public/img
    $productToUpdate->image->storePubliclyAs("/public/img", $finalImage);

    //Asignamos la imagen al producto que guardamos
    $productToUpdate->image = $finalImage;
    $productToUpdate->save();

    return redirect("/products");
  }

  public function search(){
    $products = Product::where("name", "LIKE", "%" . $_GET['buscador'] . "%")
    ->get();
    return view("search", compact("products"));
  }



  // $userSaved = user::create($request->all());
  // 		$imagen = $request["avatar"];
  // 		// Armo un nombre único para este archivo
  // 		$imagenFinal = uniqid("img_") . "." . $imagen->extension();
  // 		// Subo el archivo en la carpeta elegida
  // 		$imagen->storePubliclyAs("public/storage", $imagenFinal);
  // 		// Le asigno la imagen al usuario guardado
  // 		$userSaved->avatar = $imagenFinal;
  // 		$userSaved->save();
  // 		// Redireccionamos
  // 		return redirect('/perfil_usuario');
  // 	}

  public function purchase(){
    return redirect("/products");
  }

}
