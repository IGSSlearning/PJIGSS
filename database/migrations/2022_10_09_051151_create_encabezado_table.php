<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncabezadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encabezado', function (Blueprint $table) {
            $table->string('Nombre_destinatario', 100);
            $table->string('Saludo', 100);
            $table->string('Lugar', 100);
            $table->string('Despedida', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encabezado');
    }
}
