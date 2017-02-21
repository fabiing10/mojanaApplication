<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MojanaMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('indicadores', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->string('nombre');
          $table->boolean('mapa');
          $table->timestamps();
      });

      Schema::create('variables', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('indicador_id')->unsigned();
          $table->string('categoria')->nullable();
          $table->string('sub_categoria')->nullable();
          $table->string('dimension')->nullable();
          $table->string('clasificacion')->nullable();
          $table->string('nechi')->nullable();
          $table->string('achi')->nullable();
          $table->string('magangue')->nullable();
          $table->string('san_jacinto')->nullable();
          $table->string('ayapel')->nullable();
          $table->string('caimito')->nullable();
          $table->string('guaranda')->nullable();
          $table->string('majagual')->nullable();
          $table->string('san_benito_abad')->nullable();
          $table->string('san_marcos')->nullable();
          $table->string('sucre')->nullable();
          $table->string('regional')->nullable();
          $table->timestamps();

          $table->foreign('indicador_id')
              ->references('id')
              ->on('indicadores')
              ->onDelete('cascade');
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
