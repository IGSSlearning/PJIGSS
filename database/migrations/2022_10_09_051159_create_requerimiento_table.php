<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimiento', function (Blueprint $table) {
            $table->integer('Id_requerimiento')->primary();
            $table->string('No_requerimiento', 50);
            $table->date('Fecha_requerimiento');
            $table->date('Fecha_envio');
            $table->binary('Estado', 1);
            $table->string('Observaciones', 300)->nullable();
            $table->integer('id_oficio');
            $table->integer('id_usuario');
            $table->integer('no_afiliado');
            
            $table->foreign('no_afiliado', 'fk_requerimiento_afiliado1')->references('No_afiliado')->on('afiliado');
            $table->foreign('id_oficio', 'fk_requerimiento_oficio1')->references('Id_oficio')->on('oficio');
            $table->foreign('id_usuario', 'fk_requerimiento_usuario1')->references('Id_usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requerimiento');
    }
}
