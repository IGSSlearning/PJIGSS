<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficioSuspencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficio_suspencion', function (Blueprint $table) {
            $table->integer('Id_oficio_suspencion')->primary();
            $table->binary('Estado', 1);
            $table->integer('id_oficio');
            $table->integer('id_suspension');
            
            $table->foreign('id_oficio', 'fk_oficio_suspencion_oficio1')->references('Id_oficio')->on('oficio');
            $table->foreign('id_suspension', 'fk_oficio_suspencion_suspension1')->references('Id_suspension')->on('suspension');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficio_suspencion');
    }
}
