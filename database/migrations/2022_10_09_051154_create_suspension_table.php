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
            $table->integer('Id_suspension')->primary();
            $table->date('Fecha_ini_suspesion');
            $table->date('Fecha_fin_suspension');
            $table->date('Fecha_alta');
            $table->dateTime('Fecha_registro');
            $table->date('Fecha_envio_prestaciones');
            $table->date('Fecha_recibido_prestaciones');
            $table->date('Fecha_revision');
            $table->string('Observaciones', 250)->nullable();
            $table->binary('Estado', 1);
            $table->integer('no_afiliado');
            $table->integer('id_rev_susp');
            $table->integer('id_clinica_servicio');
            
            $table->foreign('no_afiliado', 'fk_suspension_afiliado1')->references('No_afiliado')->on('afiliado');
            $table->foreign('id_clinica_servicio', 'fk_suspension_clinica/servicio1')->references('Id_clinica/servicio')->on('clinica_servicio');
            $table->foreign('id_rev_susp', 'fk_suspension_rev_susp1')->references('Id_rev_susp')->on('rev_susp');
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
