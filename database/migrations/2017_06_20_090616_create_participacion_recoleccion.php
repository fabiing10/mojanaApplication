<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionRecoleccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('participaciones_recoleccion', function (Blueprint $table) {

          $table->increments('id')->unsigned();
          /* 1 Identificacion */
          $table->string('tipo_identificacion')->nullable();
          $table->string('identificacion')->nullable();
          $table->string('nombres_apellidos')->nullable();
          $table->integer('edad')->nullable();
          $table->integer('genero');
          $table->string('regimen_salud')->nullable();
          $table->string('ocupacion')->nullable();
          $table->string('grupo_etnico')->nullable();
          $table->boolean('discapacidad')->nullable();
          $table->string('nivel_educativo')->nullable();
          $table->boolean('situacion_dezplazamiento_conflicto')->nullable();
          $table->string('sector_pertenece')->nullable();
          /* disable */
              /* transporte y vias */
              $table->string('rutas_movilidad')->nullable();
              $table->string('como_movilizan_personas')->nullable();
              $table->string('requerimientos_movilidad')->nullable();
              $table->string('como_movilizan_mercancias')->nullable();
              /* infraestructura y servicios publicos */
              $table->string('principal_problematica')->nullable();
              $table->string('posibles_soluciones')->nullable();
              $table->string('infraestructura_con_cuenta')->nullable();
              $table->string('infraestructura_necesaria')->nullable();
              $table->string('recursos')->nullable();
              $table->string('limitantes')->nullable();
              /* gremios economicos */
              $table->string('gremio_pertenece')->nullable();
              $table->string('vienen_sus_insumos')->nullable();
              $table->string('procesos_realiza')->nullable();
              $table->string('comercializa_productos')->nullable();
              $table->string('requerimientos_infraestructura')->nullable();
              $table->string('requerimientos_tecnologia')->nullable();
              /* medio ambiente y desarrollo */
              $table->string('bienes_servicios_municipio')->nullable();
              $table->string('aprovechan_bienes_servicios_municipio')->nullable();
              $table->string('alternativas_aprovechamiento_naturaleza')->nullable();
              $table->string('problematicas_aprovechamiento_naturaleza')->nullable();
              $table->string('armonia_naturaleza')->nullable();
              $table->string('recuperacion_complejos_cenagosos')->nullable();
          /* 2. Lugar */
          $table->string('municipio_residencia')->nullable();
          $table->string('comuna_barrio_vereda')->nullable();
          $table->integer('sector')->nullable();
          $table->string('tiempo_residencia')->nullable();
          $table->boolean('ha_salido_departamento')->nullable();
          $table->boolean('ha_salido_municipio')->nullable();
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
          /* 3. Vivienda & Servicios */
          $table->string('condiciones_fisicas')->nullable();
          $table->string('vivienda_es')->nullable();
          $table->string('vivienda_cuenta_agua_potable')->nullable();
          $table->string('vivienda_cuenta_alcantarillado')->nullable();
          $table->string('vivienda_cuenta_energia')->nullable();
          $table->string('vivienda_cuenta_gas')->nullable();
          $table->string('vivienda_cuenta_recoleccion_basura')->nullable();
          $table->string('mas_suelo_para')->nullable();
          /* 4. Problemas & Solucion*/
          $table->string('ubicacion_solucion_ambiental')->nullable();
          $table->string('ubicacion_latitud_ambiental')->nullable();
          $table->string('ubicacion_longitud_ambiental')->nullable();
          $table->string('tema_problematica_ambiental')->nullable();
          $table->string('problematica_ambiental')->nullable();
          $table->string('solucion_ambiental')->nullable();

          $table->string('ubicacion_solucion_social')->nullable();
          $table->string('ubicacion_latitud_social')->nullable();
          $table->string('ubicacion_longitud_social')->nullable();
          $table->string('tema_problematica_social')->nullable();
          $table->string('problematica_social')->nullable();
          $table->string('solucion_social')->nullable();

          $table->string('ubicacion_solucion_economico')->nullable();
          $table->string('ubicacion_latitud_economico')->nullable();
          $table->string('ubicacion_longitud_economico')->nullable();
          $table->string('tema_problematica_economico')->nullable();
          $table->string('problematica_economico')->nullable();
          $table->string('solucion_economico')->nullable();
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
