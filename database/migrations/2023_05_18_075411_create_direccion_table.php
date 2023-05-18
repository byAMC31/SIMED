<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->id('id_direccion');
            $table->string('estadoDir')->nullable();
            $table->string('municipioDir')->nullable();
            $table->string('coloniaDir')->nullable();
            $table->string('calleDir')->nullable();
            $table->integer('nExteriorDir')->nullable();
            $table->integer('nInteriorDir')->nullable();
            $table->integer('codigoPostalDir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}
