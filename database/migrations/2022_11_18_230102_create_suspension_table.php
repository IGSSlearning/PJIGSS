<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuspensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspension', function (Blueprint $table) {
            $table->integer('id_suspension')->primary();
            $table->date('fecha_inicio_suspension');
            $table->date('fecha_fin_suspension');
            $table->date('fecha_alta');
            $table->dateTime('fecha_registro');
            $table->date('fecha_envio_prestacion')->nullable();
            $table->date('fecha_recibido_prestacione')->nullable();
            $table->date('fecha_revision')->nullable();
            $table->string('observacion', 250)->nullable();
            $table->string('estado', 20);
            $table->integer('no_afiliado');
            $table->integer('id_clinica_servicio');
            $table->string('medico_colegiado', 10);
            $table->unsignedBigInteger('users_id_registrador');
            $table->unsignedBigInteger('users_id_revisor')->nullable();
            $table->date('fecha_inicio_caso');
            $table->dateTime('fecha_accidente');
            $table->integer('id_riesgo');
            
            $table->foreign('no_afiliado', 'fk_suspension_afiliado1')->references('no_afiliado')->on('afiliado');
            $table->foreign('id_clinica_servicio', 'fk_suspension_clinica/servicio1')->references('id_clinica_servicio')->on('clinica_servicio');
            $table->foreign('medico_colegiado', 'fk_suspension_medico1')->references('colegiado')->on('medico');
            $table->foreign('id_riesgo', 'fk_suspension_riesgo1')->references('id')->on('riesgo');
            $table->foreign('users_id_registrador', 'fk_suspension_users1')->references('id')->on('users');
            $table->foreign('users_id_revisor', 'fk_suspension_users2')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suspension');
    }
}
