<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('first_name', 50);
            $table->string('last_name', 120);
            $table->string('phone', 15);
            $table->string('email', 100);
            $table->unique('email');
            $table->text('address');
            $table->datetime('updated_at');
            $table->datetime('created_at');
            $table->engine = 'InnoDB';
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_models');
    }
}
