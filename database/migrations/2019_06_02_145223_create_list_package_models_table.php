<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListPackageModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('package_list')){
        Schema::create('package_list', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_package');
            $table->foreign('id_package')->references('id')->on('package')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('description', 255);
            $table->float('price');
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
        Schema::dropIfExists('package_list_models');
    }
}
