<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioSuspencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_suspencion', function (Blueprint $table) {
            $table->integer('Id_suspencion')->primary();
            $table->binary('Estado', 1);
            $table->integer('id_formulario');
            $table->integer('id_suspension');
            
            $table->foreign('id_formulario', 'fk_formulario_suspencion_formulario1')->references('Id_formulario')->on('formulario');
            $table->foreign('id_suspension', 'fk_formulario_suspencion_suspension1')->references('Id_suspension')->on('suspension');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulario_suspencion');
    }
}
