<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupCategoryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('group_category_image')){
        Schema::create('group_category_image', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_image');
            $table->foreign('id_image')->references('id')->on('images')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('id_category');
            $table->foreign('id_category')->references('id')->on('category')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->datetime('created_at');
            $table->datetime('updated_at');
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
        Schema::dropIfExists('group_category_images');
    }
}
