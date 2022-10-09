<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->integer('Id_rol')->primary();
            $table->string('Nombre', 100);
            $table->string('Descripcion', 250);
            $table->integer('id_rol_usuario');
            
            $table->foreign('id_rol_usuario', 'fk_rol_rol_usuario1')->references('Id_rol_usuario')->on('rol_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol');
    }
}
