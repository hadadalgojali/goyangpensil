<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('auth')) {
        Schema::create('auth', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('id')->references('id')->on('users');
            $table->string('username', 50);
            $table->string('password', 255);
            $table->string('ip', 100);
            $table->smallInteger('login_stat', 1);
            $table->datetime('created_at');
            $table->datetime('updated_at');
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
        Schema::dropIfExists('auth_models');
    }
}
