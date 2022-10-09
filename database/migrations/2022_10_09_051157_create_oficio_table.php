<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficio', function (Blueprint $table) {
            $table->integer('Id_oficio')->primary();
            $table->string('Destinatario', 50);
            $table->string('Saludo', 250);
            $table->string('Lugar', 50);
            $table->string('Correlativo', 250);
            $table->string('Clinica_servicio', 100);
            $table->date('Fecha');
            $table->string('Despedida', 250);
            $table->binary('Estado', 1);
            $table->integer('id_revision');
            
            $table->foreign('id_revision', 'fk_oficio_revision')->references('Id_revision')->on('revision');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficio');
    }
}
