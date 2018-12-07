<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
        $table->string('name',30);
        $table->string('last_name',30);
        $table->string('username',30)->unique();
        $table->string('password',255);
        $table->string('remember_token',100);
        $table->string('image',100)->nullable();
        $table->string('email')->unique();
        $table->string('phone',10)->nullable();
        $table->tinyInteger('is_admin')->default(0);
        $table->tinyInteger('terms')->default(1);
        $table->timestamps();
        $table->softDeletes('deleted_at')->nullable()->default(null);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
