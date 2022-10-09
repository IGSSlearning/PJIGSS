<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('Id_usuario')->primary();
            $table->string('no_afiliado', 100)->nullable();
            $table->string('IBM', 20);
            $table->string('Nombres', 50);
            $table->string('Apellidos', 50);
            $table->string('Nomb_usuario', 60);
            $table->string('Contrasena', 50);
            $table->integer('id_tipo_usuario');
            
            $table->foreign('id_tipo_usuario', 'fk_usuario_tipo_usuario1')->references('Id_tipo_usuario')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
