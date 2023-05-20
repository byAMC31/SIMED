<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->id('id_contacto');
            $table->string('nombreC')->nullable();
            $table->string('appC')->nullable();
            $table->string('apmC')->nullable();
            $table->string('relacionAlumnoC')->nullable();
            $table->string('nTelC')->nullable();
            $table->foreignId('id_direccion')
            ->nullable()
            ->constrained('direccion','id_direccion')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
