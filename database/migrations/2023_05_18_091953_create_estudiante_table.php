<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();  // Cambiado de 'user_id' a 'id_usuario'
            $table->string('appAI')->nullable();
            $table->string('apmAI')->nullable();
            $table->string('sexoAI')->nullable();
            $table->string('nTelAI')->nullable();
            $table->string('nssAI')->nullable();
            $table->string('nControl')->nullable();
            $table->foreign('id')  // Cambiado de 'user_id' a 'id_usuario'
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

                $table->foreignId('id_carrera')
                ->nullable()
                ->constrained('carrera', 'id_carrera') // Especificar el nombre de la columna a la que se hace referencia en la tabla 'carrera'
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            

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
        Schema::dropIfExists('estudiante');
    }
}