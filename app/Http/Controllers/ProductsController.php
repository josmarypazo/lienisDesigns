<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function create() {
      // $products = Product::all();
      // $vac = compact("products");

      return view("create_product");
    }

    public function list() {
      //$products = Product::all();

      return view("products");
    }
}
