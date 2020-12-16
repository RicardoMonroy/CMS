<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_footers', function (Blueprint $table) {
            $table->id();

            $table->string('color'); // color de texto
            $table->string('background'); // color del footer
            $table->string('copyright'); //copyrigth
            $table->string('address'); // dirección de referencia
            $table->string('phone'); // teléfono
            $table->string('email'); // correo de contacto
            $table->string('schedule'); // horario de atención

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
        Schema::dropIfExists('config_footers');
    }
}
