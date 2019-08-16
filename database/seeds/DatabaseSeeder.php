<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $customers = factory(App\Customer::class)->times(10)->create();
        $products = factory(App\Product::class)->times(10)->create();
        $categories = factory(App\Category::class)->times(10)->create();
        $shoppings_carts = factory(App\shoppingCart::class)->times(10)->create();
        $shoppings_lists= factory(App\shoppingList::class)->times(10)->create();
        // $this->call(UsersTableSeeder::class);

        foreach ($products as $oneProduct) {
  				$oneProduct->category()->associate($categories->random(1)->first()->id);
  				$oneProduct->save();
        }

        foreach ($shoppings_carts as $oneShoppingCart) {
          $oneShoppingCart->customer()->associate($customers->random(1)->first()->id);
          $oneProduct->save();
        }

        foreach ($shoppings_lists as $oneShoppingList) {
          $oneShoppingList->product()->associate($products->random(1)->first()->id);
          $oneShoppingList->shoppingCart()->associate($shoppings_carts->random(1)->first()->id);
          $oneProduct->save();
        }


  }
}
