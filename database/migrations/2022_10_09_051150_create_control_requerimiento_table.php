<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlRequerimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_requerimiento', function (Blueprint $table) {
            $table->integer('Id_control_requerimiento')->primary();
            $table->string('Cod_requerimiento', 50);
            $table->date('Fecha_registro');
            $table->string('URL_PDF', 10000);
            $table->string('Observacones', 100)->nullable();
            $table->binary('Estado', 1);
            $table->integer('id_usuario');
            
            $table->foreign('id_usuario', 'fk_control_requerimiento_usuario1')->references('Id_usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_requerimiento');
    }
}
