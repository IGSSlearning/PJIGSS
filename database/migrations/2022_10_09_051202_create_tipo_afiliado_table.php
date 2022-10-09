<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoAfiliadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_afiliado', function (Blueprint $table) {
            $table->integer('Id_tipo_afiliado')->primary();
            $table->string('Nombre', 100);
            $table->string('Descripcion', 250);
            $table->integer('no_afiliado');
            
            $table->foreign('no_afiliado', 'fk_tipo_afiliado_afiliado1')->references('No_afiliado')->on('afiliado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_afiliado');
    }
}
