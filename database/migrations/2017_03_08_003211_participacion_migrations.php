<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParticipacionMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participaciones', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            /* 1 Identificacion */
            $table->integer('tipo_identificacion')->nullable();
            $table->string('identificacion')->nullable();
            $table->string('nombres_apellidos')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('genero');
            $table->string('regimen_salud')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('grupo_etnico')->nullable();
            $table->boolean('discapacidad')->nullable();
            $table->integer('estrato')->nullable();
            $table->string('nivel_educativo')->nullable();
            $table->boolean('situacion_desplazamiento_conflicto')->nullable();
            /* 2. Lugar */
            $table->string('municipio_residencia')->nullable();
            $table->integer('sector')->nullable();
            $table->boolean('ha_salido_departamento')->nullable();
            $table->string('comuna_barrio_vereda')->nullable();
            $table->string('tiempo_residencia')->nullable();
            $table->boolean('ha_salido_municipio')->nullable();
            /* 3. Vivienda & Servicios */
            $table->string('condiciones_fisicas')->nullable();
            $table->string('vivienda_cuenta_agua_potable')->nullable();
            $table->string('vivienda_cuenta_alcantarillado')->nullable();
            $table->string('vivienda_cuenta_energia')->nullable();
            $table->string('vivienda_cuenta_gas')->nullable();
            $table->string('vivienda_cuenta_recoleccion_basura')->nullable();
            $table->string('vivienda_es')->nullable();
            $table->string('mas_suelo_para')->nullable();
            /* 3.1 Estado Del Equipamiento */
            $table->string('Q_01')->nullable();
            $table->string('Q_02')->nullable();
            $table->string('Q_03')->nullable();
            $table->string('Q_04')->nullable();
            $table->string('Q_05')->nullable();
            $table->string('Q_06')->nullable();
            $table->string('Q_07')->nullable();
            $table->string('Q_08')->nullable();
            $table->string('Q_09')->nullable();
            $table->string('Q_10')->nullable();
            $table->string('Q_11')->nullable();
            $table->string('Q_12')->nullable();
            $table->string('Q_13')->nullable();
            $table->string('Q_14')->nullable();
            $table->string('Q_15')->nullable();
            $table->string('Q_16')->nullable();
            $table->string('Q_17')->nullable();
            $table->string('Q_18')->nullable();
            $table->string('Q_19')->nullable();
            $table->string('Q_20')->nullable();
            $table->string('Q_21')->nullable();
            /* 4. Problemas & Solucion*/
            $table->longText('mayor_problema')->nullable();
            $table->string('sector_problema')->nullable();
            $table->string('tipo_solucion')->nullable();
            $table->string('ubicacion_latitud')->nullable();
            $table->string('ubicacion_longitud')->nullable();
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
