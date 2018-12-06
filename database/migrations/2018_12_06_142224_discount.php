<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Discount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('banners', function(Blueprint $table){
        $table->tinyInteger('discount');
        $table->float('new_price',10,2);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('banners', function(Blueprint $table){
        $table->dropColumn('discount','new_price');
      });
    }
}
