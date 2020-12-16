<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_generals', function (Blueprint $table) {
            $table->id();

            $table->string('font');
            $table->string('size');
            $table->string('logo');
            $table->string('background'); // fondo principal
            $table->string('title');
            $table->string('favicon');
            $table->string('map');

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
        Schema::dropIfExists('config_generals');
    }
}
