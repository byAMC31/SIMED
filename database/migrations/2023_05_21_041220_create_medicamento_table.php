<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamento', function (Blueprint $table) {
            $table->id('id_medicamento');
            $table->string('nombreMe')->nullable();
            $table->string('descripcionMe')->nullable();
            $table->decimal('precio', 8, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->string('dosisMe')->nullable();
            $table->date('fechaCaducidad')->nullable();
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
        Schema::dropIfExists('medicamento');
    }
}
