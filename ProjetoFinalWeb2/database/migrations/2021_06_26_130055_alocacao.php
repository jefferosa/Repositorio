<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alocacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacoes', function (Blueprint $table) {
            $table->integer('comida_id')->unsigned();
            $table->foreign('comida_id')->references('id')->on('comidas');
            $table->integer('zoologico_id')->unsigned();
            $table->foreign('zoologico_id')->references('id')->on('zoologicos');
            $table->primary(['zoologico_id', 'comida_id']);
            $table->timestamps();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
