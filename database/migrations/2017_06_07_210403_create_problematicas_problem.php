<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblematicasProblem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('temas_problematicas', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          /* 1 Identificacion */
          $table->string('nombre')->nullable();
          $table->timestamps();
      });
      Schema::create('problematicas', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('tema_problematica_id')->unsigned();
          $table->foreign('tema_problematica_id')
              ->references('id')
              ->on('temas_problematicas')
              ->onDelete('cascade');
          $table->string('nombre')->nullable();
          $table->timestamps();
      });
      Schema::create('soluciones', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('problematica_id')->unsigned();
          $table->foreign('problematica_id')
              ->references('id')
              ->on('problematicas')
              ->onDelete('cascade');
          $table->string('nombre')->nullable();
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
