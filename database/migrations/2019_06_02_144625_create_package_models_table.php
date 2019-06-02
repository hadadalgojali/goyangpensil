<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('package')){
        Schema::create('package', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_blog');
            $table->foreign('id_blog')->references('id')->on('blogs')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('title');
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
        Schema::dropIfExists('package_models');
    }
}
