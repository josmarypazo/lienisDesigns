<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingTables extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up(){
       Schema::create('users', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('fullName');
           $table->string('user', 50);
           $table->date('birthdate');
           $table->string('email')->unique();
           $table->string('password');
           $table->string("country");
           $table->string("state")->nullable();
           $table->string("avatar");
           $table->rememberToken();
           $table->timestamps();
       });

       Schema::create("categories", function (Blueprint $table){
         $table->bigIncrements("id");
         $table->string("name", 50);
         $table->timestamps();
       });

       Schema::create("products", function (Blueprint $table){
         $table->bigIncrements("id");
         $table->string("name", 50);
         $table->decimal("rating", 4, 2);
         $table->string("description", 300);
         $table->decimal("price", 6, 2);
         $table->integer("stock");
         $table->unsignedBigInteger('category_id')->nullable();
     		 $table->foreign('category_id')->references('id')->on('categories');
         $table->string("image");
         $table->timestamps();
     });

     Schema::create('shopping_carts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id')->nullable();
        $table->foreign('user_id')->references('id')->on('users');
        $table->timestamps();
    });

     Schema::create('product_shopping_cart', function (Blueprint $table) {
        $table->bigIncrements('id');
				$table->unsignedBigInteger('shopping_cart_id')->nullable();
    		$table->foreign('shopping_cart_id')->references('id')->on('shopping_carts');
				$table->unsignedBigInteger('product_id')->nullable();
    		$table->foreign('product_id')->references('id')->on('products');
        $table->integer("quantity")->nullable();
        $table->decimal("total_purchase", 8, 2)->nullable();
				$table->timestamps();
});
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){


    Schema::dropIfExists('product_shopping_cart');

    Schema::dropIfExists('shopping_carts');

    Schema::dropIfExists('products');

    Schema::dropIfExists('categories');

    Schema::dropIfExists('users');

  }
}
