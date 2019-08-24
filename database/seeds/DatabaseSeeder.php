<?php

// use Illuminate\Database\Seeder;
//
//
// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         $customers = factory(App\Customer::class)->times(10)->create();
//         $products = factory(App\Product::class)->times(10)->create();
//         $categories = factory(App\Category::class)->times(10)->create();
//         $shopping_carts = factory(App\shoppingCart::class)->times(10)->create();
//         // $this->call(UsersTableSeeder::class);
//
//         foreach ($products as $oneProduct) {
//   				$oneProduct->category()->associate($categories->random(1)->first()->id);
//           $oneProduct->save();
//           $oneProduct->shoppingCarts()->sync($shopping_carts->random(1));
//
//           $allShopping_carts  = \App\product_shoppingCart::all();
//
//           foreach ($allShopping_carts as $oneShopping_carts) {
//             $qR = rand(1, 10);
//             $pR = rand(1, 9999);
//             $oneShopping_carts->quantity = $qR;
//             $oneShopping_carts->total_purchase = $qR * $pR;
//             $oneShopping_carts->save();
//           }
//         }
//
//         foreach ($shopping_carts as $oneShoppingCart) {
//           $oneShoppingCart->customer()->associate($customers->random(1)->first()->id);
//           $oneShoppingCart->save();
//         }
//
//     }
// }
