<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliado', function (Blueprint $table) {
            $table->integer('No_afiliado')->primary();
            $table->string('CUI', 100);
            $table->string('Nombres', 100);
            $table->string('Apellidos', 100);
            $table->string('Telefono', 15);
            $table->string('Direccion', 50)->nullable();
            $table->string('Genero', 5);
            $table->date('Fecha_Naci');
            $table->string('IBM', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliado');
    }
}
