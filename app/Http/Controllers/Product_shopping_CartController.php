<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\product_shoppingCart;

class Product_shopping_CartController extends Controller
{

    public function purchase($id, Request $request) {
      $productToBuy = Product::find($id);
      $qR = rand(1, 10);
      $pR = $productToBuy->price;
      $quantity = $qR;
      $total_purchase = $qR * $pR;
      //$product_shopping_cart->quantity = $request["quantity"];
      $vac = compact("productToBuy", "qR","pR","quantity","total_purchase");

      return view("purchase", $vac);
    }



               // $oneShopping_carts->save();






    public function index(){
        if(Auth::user()){
            $products = product_shoppingCart::where('shopping_cart_id',Auth::user()->id)->get();
            return view('purchase',compact('products'));
        }
        return redirect('/');
    }
//     public function add($id){
//         if(Auth::user()){
//             $products = product_shoppingCart::where('shopping_cart_id',Auth::user()->id)
//             ->where('product_id',$id);
//             if($products->exists()){
//                 $products = $products->get()->first();
//                 $products->save();
//                 }
//                 else{
//                 $newPurchase = new product_shoppingCart();
//                 $newPurchase->product_shoppingCart = Auth::user()->id;
//                 $newPurchase->product_id = $id;
//                 $newPurchase->quantity = 1;
//                 $newPurchase->save();
//             }
//             return redirect('purchase');
// }
// }



}
