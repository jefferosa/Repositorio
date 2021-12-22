<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Animal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {

            $table->increments('id');
            $table->string('codigo');
            $table->string('name');
            $table->string('classe')->unique();
            $table->string('uf_nacionalidade');
            $table->string('data_nascimento');
            $table->string('sexo');
            $table->string('raca');
            $table->string('forma_ingresso');
            $table->string('status');
            $table->integer('zoologico_id')->unsigned();
            $table->foreign('zoologico_id')->references('id')->on('zoologicos');
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
