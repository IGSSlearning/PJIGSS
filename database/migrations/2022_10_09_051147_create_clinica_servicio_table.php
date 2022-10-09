<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica_servicio', function (Blueprint $table) {
            $table->integer('Id_clinica/servicio')->primary();
            $table->string('Nombre', 50)->nullable();
            $table->string('Descripcion', 250)->nullable();
            $table->integer('id_especialidad');
            $table->integer('id_area');
            
            $table->foreign('id_area', 'fk_clinica/servicio_area1')->references('Id_area')->on('area');
            $table->foreign('id_especialidad', 'fk_clinica/servicio_especialidad1')->references('Id_especialidad')->on('especialidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinica_servicio');
    }
}
