<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->string('name',30);
          $table->string('last_name',30);
          $table->string('username',30)->unique();
          $table->string('image',80)->nullable();
          $table->string('mail',50)->unique();
          $table->string('phone',10)->nullable();
          $table->softDeletes('isset')->default('null')->nullable();
          $table->tinyInteger('terms')->default(1);
          $table->string('password',100);
          $table->charset='utf8';
        });

        Schema::create('products', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->string('name',30);
          $table->float('price',7,2)->nullable();
          $table->string('image',100)->nullable();
          $table->text('description')->nullable();
          $table->string('brand',30)->nullable();
          $table->softDeletes('isset')->default('null')->nullable();
          $table->charset='utf8';
        });

        Schema::create('carts', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->float('total',7,2)->nullable();
          $table->softDeletes('isset')->default('null')->nullable();
          $table->charset='utf8';
        });

        Schema::create('categories', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->string('name',30);
          $table->text('description')->nullable();
          $table->softDeletes('isset')->default('null')->nullable();
          $table->charset='utf8';
        });


        Schema::create('cart_product', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->smallIncrements('id_cart')->unsigned();
          $table->smallIncrements('id_product')->unsigned();
          $table->foreign('id_product')->references('id')->on('products');
          $table->foreign('id_cart')->references('id')->on('carts')
          $table->softDeletes("isset")->default('null')->nullable();
          $table->charset='utf8';
        });

        Schema::create('cart_users', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->smallIncrements('id_cart')->unsigned();
          $table->smallIncrements('id_user')->unsigned();
          $table->foreign('id_user')->references('id')->on('users');
          $table->foreign('id_cart')->references('id')->on('cart');
          $table->softDeletes("isset")->default('null')->nullable();
          $table->charset='utf8';
        });

        Schema::create('category_product', function (Blueprint $table){
          $table->smallIncrements('id')->index()->unsigned();
          $table->timestamps();
          $table->smallIncrements('id_category')->unsigned();
          $table->smallIncrements('id_product')->unsigned();
          $table->foreign('id_category')->references('id')->on('category');
          $table->foreign('id_product')->references('id')->on('products');
          $table->softDeletes("isset")->default('null')->nullable();
          $table->charset='utf8';
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
