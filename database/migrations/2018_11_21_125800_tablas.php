<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table){
        $table->smallIncrements('id');
        $table->timestamps();
        $table->string('name',30);
        $table->string('last_name',30);
        $table->string('username',30)->unique();
        $table->string('image',100)->nullable();
        $table->string('mail',50)->unique();
        $table->string('phone',10)->nullable();
        $table->softDeletes('deleted_at')->nullable()->default(null);
        $table->tinyInteger('terms')->default(1);
        $table->tinyInteger('is_admin')->default(0);
        $table->string('password',100);
      });

      Schema::create('products', function (Blueprint $table){
        $table->smallIncrements('id');
        $table->timestamps();
        $table->string('name',50)->unique();
        $table->string('image',100)->nullable();
        $table->text('description')->nullable()->default(null);
        $table->softDeletes('delete_at')->nullable()->default(null);
        $table->string('brand', 30)->nullable();
        $table->float('price', 9, 2);
      });

      Schema::create('banner', function(Blueprint $table){
        $table->smallIncrements('id');
        $table->timestamps();
        $table->softDeletes('delete_at')->nullable()->default(null);
        $table->smallInteger('product_id')->unsigned();
        $table->foreign('product_id')->references('id')->on('products');
      });

      Schema::create('categories', function (Blueprint $table){
        $table->tinyIncrements('id');
        $table->timestamps();
        $table->string('name',50)->unique();
        $table->softDeletes('deleted_at')->nullable()->default(null);
      });

        Schema::create('carts', function (Blueprint $table){
          $table->Increments('id');
          $table->timestamps();
          $table->tinyInteger('purchased');
          $table->float('total', 10, 2);
          $table->softDeletes('deleted_at')->nullable()->default(null);
      });

      Schema::create('user_cart', function (Blueprint $table){
        $table->Increments('id');
        $table->timestamps();
        $table->smallInteger('user_id')->unsigned();
        $table->Integer('cart_id')->unsigned();
        $table->softDeletes('deleted_at')->nullable()->default(null);
         $table->foreign('user_id')->references('id')->on('users');
         $table->foreign('cart_id')->references('id')->on('carts');
       });

       Schema::create('cart_product', function (Blueprint $table){
         $table->Increments('id');
         $table->timestamps();
         $table->smallInteger('product_id')->unsigned();
         $table->Integer('cart_id')->unsigned();
         $table->unsignedDecimal('precio',10,2)->unsigned();
         $table->softDeletes('deleted_at')->nullable()->default(null);
          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('cart_id')->references('id')->on('carts');
     });

       Schema::create('category_product', function (Blueprint $table){
         $table->Increments('id');
         $table->timestamps();
         $table->smallInteger('product_id')->unsigned();
         $table->tinyInteger('category_id')->unsigned();
         $table->softDeletes('deleted_at')->nullable()->default(null);
          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('category_id')->references('id')->on('categories');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('cart_product');
        Schema::dropIfExists('user_cart');
        Schema::dropIfExists('users');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('banner');

    }
}
