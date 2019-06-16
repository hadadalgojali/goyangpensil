<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupBlogCategoryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('group_blog_category')){
        Schema::create('group_blog_category', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_blog');
            $table->foreign('id_blog')->references('id')->on('blogs')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('id_category');
            $table->foreign('id_category')->references('id')->on('category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('group_blog_category_models');
    }
}
