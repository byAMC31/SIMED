<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->id();  // Cambiado de 'user_id' a 'id_usuario'
            $table->string('nombreMe')->nullable();
            $table->string('appMe')->nullable();
            $table->string('apmMe')->nullable();
            $table->string('sexoMe')->nullable();
            $table->string('nTelMe')->nullable();
            $table->string('nssMe')->nullable();
            $table->foreign('id')  // Cambiado de 'user_id' a 'id_usuario'
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('medico');
    }
}
