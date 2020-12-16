<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_items', function (Blueprint $table) {
            $table->id();

            $table->string('title'); // elementos del menú
            $table->string('link'); // dirección del item
            $table->string('icon');

            $table->unsignedBigInteger('id_menu')->nullable();
            $table->foreign('id_menu')->references('id')->on('config_menus')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config_items');
    }
}
