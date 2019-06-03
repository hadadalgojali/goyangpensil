<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupBlogModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('setup_blog'))
        Schema::create('setup_blog', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_blog');
            $table->foreign('id_blog')->references('id')->on('blogs')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('app', 100);
            $table->string('path', 255);
            $table->string('file', 255);
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setup_blog_models');
    }
}
