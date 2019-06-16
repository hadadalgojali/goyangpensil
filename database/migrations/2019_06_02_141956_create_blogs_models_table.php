<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('blogs')){
        Schema::create('blogs', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_user');
            $table->string('title', 100);
            $table->text('description');
            $table->integer('project_count');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->foreign('id_user')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('blogs_models');
    }
}
