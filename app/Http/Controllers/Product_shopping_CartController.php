<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\product_shoppingCart;

class Product_shopping_CartController extends Controller
{


    public function purchase($id){
      $productToBuy = Product::find($id);
      $product_shopping_cart = product_shoppingCart::find("total_purchase");
      $vac = compact("productToBuy", "product_shopping_cart");

      return view("purchase", $vac);
    }

    public function index(){
        if(Auth::customer()){
            $products = product_shoppingCart::where('shopping_cart_id',Auth::customer()->id)->get();
            return view('purchase',compact('products'));
        }
        return redirect('/');
    }
    public function add($id){
        if(Auth::customer()){
            $products = product_shoppingCart::where('shopping_cart_id',Auth::customer()->id)
            ->where('product_id',$id);
            if($products->exists()){
                $products = $products->get()->first();
                $products->save();
                }
                else{
                $newPurchase = new product_shoppingCart();
                $newPurchase->product_shoppingCart = Auth::customer()->id;
                $newPurchase->product_id = $id;
                $newPurchase->quantity = 1;
                $newPurchase->save();
            }
            return redirect('purchase');
        }
    
