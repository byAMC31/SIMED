<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('justificante', function (Blueprint $table) {
        $table->id('id_justificante');
        $table->string('emisorJu')->nullable();
        $table->string('diagnosticoJu')->nullable();
        $table->date('fechaJu')->nullable();
    
        // Relacionamos con 'estudiante' en lugar de 'usuario'
        $table->unsignedBigInteger('id_estudiante')->nullable();
        $table->foreign('id_estudiante')
        ->references('id')
        ->on('estudiante')
        ->cascadeOnUpdate()
        ->cascadeOnDelete();
    
        $table->unsignedBigInteger('id_medico')->nullable();
        $table->foreign('id_medico')
        ->references('id')
        ->on('medico')
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
        Schema::dropIfExists('justificante');
    }
}
