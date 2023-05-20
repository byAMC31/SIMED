<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->id('id_expediente');
            $table->string('tipoSangreEx')->nullable();
            $table->string('alergiasEx')->nullable();
            $table->string('notasMedicasEx')->nullable();
            
            $table->foreignId('id_contacto')
            ->nullable()
            ->constrained('contacto','id_contacto')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
           
            $table->foreignId('id')
            ->nullable()
            ->constrained('estudiante','id')
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
        Schema::dropIfExists('expediente');
    }
}
