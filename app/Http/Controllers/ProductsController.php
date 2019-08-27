<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\product_shoppingCart;

class ProductsController extends Controller
{
  public function list()
  {
    $products = Product::all();
    $vac = compact("products");

    return view("products", $vac);
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
    $image->storePubliclyAs("public/img", $finalImage);

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
    $productToUpdate->image->storePubliclyAs("public/img", $finalImage);

    //Asignamos la imagen al producto que guardamos
    $productToUpdate->image = $finalImage;
    $productToUpdate->save();

    return redirect("/products");
  }


  public function purchase($id){
    $productToBuy = Product::find($id);
    $product_shopping_cart = product_shoppingCart::find("total_purchase");
    $vac = compact("productToBuy", "product_shopping_cart");

    return view("purchase", $vac);

  }
}
