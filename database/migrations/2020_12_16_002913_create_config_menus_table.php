<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_menus', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('color'); // Color de texto
            $table->string('background'); // color de fondo del menú

            $table->unsignedBigInteger('id_page')->nullable();
            $table->foreign('id_page')->references('id')->on('pages')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('config_menus');
    }
}
