<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFisicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenFisico', function (Blueprint $table) {
            $table->id('idExamenF');
            $table->smallInteger('presionArterialEf')->nullable();
            $table->decimal('temperaturaEf', 5, 2)->nullable();
            $table->smallInteger('pulsoEf')->nullable();          
            $table->decimal('pesoEf', 5, 2)->nullable();
            $table->decimal('estaturaEf', 5, 2)->nullable();
            $table->string('evaluacionVisualEf')->nullable();
            $table->string('palpacionEf')->nullable();
            $table->string('auscultacionEf')->nullable();
            $table->string('evaluacionNeurologicaEf')->nullable();
            $table->string('evaluacionRespiratoriaEf')->nullable();
            $table->string('evaluacionSensorialEf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examenFisico');
    }
}
