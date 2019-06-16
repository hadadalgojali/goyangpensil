<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupBlogImageModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('group_blog_image')){
        Schema::create('group_blog_image', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_image');
            $table->foreign('id_image')->references('id')->on('images')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('id_blog');
            $table->foreign('id_blog')->references('id')->on('blogs')
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
        Schema::dropIfExists('group_blog_image_models');
    }
}
