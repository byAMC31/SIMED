<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->id('id_consulta');

            $table->date('fechaCo');
            $table->time('horaCo');
            $table->string('motivoCo');
            $table->string('observacionesCo');
            $table->string('diagnosticoCo');

            $table->foreignId('id_medico')
                ->nullable()
                ->constrained('medico', 'id')  // <- especifica la columna aquí
                ->cascadeOnUpdate()
                ->nullOnDelete();

                $table->foreignId('id_expediente')
                ->nullable()
                ->constrained('expediente', 'id_expediente')  // <- especifica la columna aquí
                ->cascadeOnUpdate()
                ->nullOnDelete();


                $table->foreignId('idExamenF')
                ->nullable()
                ->constrained('examenFisico', 'idExamenF')  // <- especifica la columna aquí
                ->cascadeOnUpdate()
                ->nullOnDelete();



                $table->foreignId('id_receta')
                ->nullable()
                ->constrained('receta', 'id_receta')  // <- especifica la columna aquí
                ->cascadeOnUpdate()
                ->nullOnDelete();
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
