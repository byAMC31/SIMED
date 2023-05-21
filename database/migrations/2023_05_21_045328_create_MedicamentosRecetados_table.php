<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosRecetadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MedicamentosRecetados', function (Blueprint $table) {
            $table->foreignId('id_receta')
                ->nullable()
                ->constrained('receta', 'id_receta')  // <- especifica la columna aquí
                ->cascadeOnUpdate()
                ->nullOnDelete();
        
            $table->foreignId('id_medicamento')
                ->nullable()
                ->constrained('medicamento','id_medicamento')
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
        Schema::dropIfExists('MedicamentosRecetados');
    }
}