<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revision', function (Blueprint $table) {
            $table->integer('Id_revision')->primary();
            $table->date('Fecha_rev');
            $table->integer('id_rev_susp');
            
            $table->foreign('id_rev_susp', 'fk_revision_rev_susp1')->references('Id_rev_susp')->on('rev_susp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revision');
    }
}
