<?php




namespace App\Http\Controllers;
use Validator;
use \App\Http\Requests\Frontend\FrontendRequest;

use Maatwebsite\Excel\Facades\Excel;
use \App\Participacion;

/**
 * Class LanguageController.
 */
class ParticipacionController extends Controller
{
    /**
     * @param $lang
     *
     * @return \Illuminate\Http\RedirectResponse
     */
     private $i;
     private $id;
     private $nombre;
     private $clasificacion;
     private $dimension;
 

     public function index(){
       return view('frontend.participacion.index');
     }

     public function save(FrontendRequest $request){

       $validator = Validator::make($request->all(), [
            'nombres_apellidos' => 'required|max:255',
            'tipo_identificacion' => 'required|max:255',
            'edad' => 'required|max:255',
            'identificacion' => 'required|max:255',
            'genero' => 'required|max:255',
            'regimen_salud' => 'required|max:255',
            'ocupacion' => 'required|max:255',
            'grupo_etnico' => 'required|max:255',
            'discapacidad' => 'required|max:255',
            'estrato' => 'required|max:255',
            'nivel_educativo' => 'required|max:255',
            'situacion_desplazamiento_conflicto' => 'required|max:255',
            'municipio_residencia' => 'required|max:255',
            'comuna_barrio_vereda' => 'required|max:255',
            'sector' => 'required|max:255',
            'tiempo_residencia' => 'required|max:255',
            'ha_salido_municipio' => 'required|max:255',
            'ha_salido_departamento' => 'required|max:255',
            'condiciones_fisicas' => 'required|max:255',
            'vivienda_es' => 'required|max:255',
            'vivienda_cuenta_agua_potable' => 'required|max:255',
            'vivienda_cuenta_alcantarillado' => 'required|max:255',
            'vivienda_cuenta_energia' => 'required|max:255',
            'vivienda_cuenta_gas' => 'required|max:255',
            'vivienda_cuenta_recoleccion_basura' => 'required|max:255',
            'mas_suelo_para' => 'required|max:255',

            'Q_01' => 'required|max:255',
            'Q_02' => 'required|max:255',
            'Q_03' => 'required|max:255',
            'Q_04' => 'required|max:255',
            'Q_05' => 'required|max:255',
            'Q_06' => 'required|max:255',
            'Q_07' => 'required|max:255',
            'Q_08' => 'required|max:255',
            'Q_09' => 'required|max:255',
            'Q_10' => 'required|max:255',
            'Q_11' => 'required|max:255',
            'Q_12' => 'required|max:255',
            'Q_13' => 'required|max:255',
            'Q_14' => 'required|max:255',
            'Q_15' => 'required|max:255',
            'Q_16' => 'required|max:255',
            'Q_17' => 'required|max:255',
            'Q_18' => 'required|max:255',
            'Q_19' => 'required|max:255',
            'Q_20' => 'required|max:255',
            'Q_21' => 'required|max:255',
            'mayor_problema' => 'required|max:255'

        ]);

        if ($validator->fails()) {
            return redirect('/participacion/nuevo')
                        ->withErrors($validator)
                        ->withInput();
        }

        $participacion = new Participacion;
        $participacion->nombres_apellidos =  $request->nombres_apellidos;
        $participacion->tipo_identificacion = $request->tipo_identificacion;
        $participacion->edad = $request->edad;
        $participacion->identificacion = $request->identificacion;
        $participacion->genero = $request->genero;
        $participacion->regimen_salud = $request->regimen_salud;
        $participacion->ocupacion = $request->ocupacion;
        $participacion->grupo_etnico = $request->grupo_etnico;
        $participacion->discapacidad = $request->discapacidad;
        $participacion->estrato = $request->estrato;
        $participacion->nivel_educativo = $request->nivel_educativo;
        $participacion->situacion_desplazamiento_conflicto = $request->situacion_desplazamiento_conflicto;
        $participacion->municipio_residencia = $request->municipio_residencia;
        $participacion->comuna_barrio_vereda = $request->comuna_barrio_vereda;
        $participacion->sector = $request->sector;
        $participacion->tiempo_residencia = $request->tiempo_residencia;
        $participacion->ha_salido_departamento = $request->ha_salido_departamento;
        $participacion->ha_salido_municipio = $request->ha_salido_municipio;
        $participacion->condiciones_fisicas = $request->condiciones_fisicas;
        $participacion->vivienda_es = $request->vivienda_es;
        $participacion->vivienda_cuenta_agua_potable = $request->vivienda_cuenta_agua_potable;
        $participacion->vivienda_cuenta_alcantarillado = $request->vivienda_cuenta_alcantarillado;
        $participacion->vivienda_cuenta_energia = $request->vivienda_cuenta_energia;
        $participacion->vivienda_cuenta_gas = $request->vivienda_cuenta_gas;
        $participacion->vivienda_cuenta_recoleccion_basura = $request->vivienda_cuenta_recoleccion_basura;
        $participacion->mas_suelo_para = $request->mas_suelo_para;
        $participacion->Q_01 = $request->Q_01;
        $participacion->Q_02 = $request->Q_02;
        $participacion->Q_03 = $request->Q_03;
        $participacion->Q_04 = $request->Q_04;
        $participacion->Q_05 = $request->Q_05;
        $participacion->Q_06 = $request->Q_06;
        $participacion->Q_07 = $request->Q_07;
        $participacion->Q_08 = $request->Q_08;
        $participacion->Q_09 = $request->Q_09;
        $participacion->Q_10 = $request->Q_10;
        $participacion->Q_11 = $request->Q_11;
        $participacion->Q_12 = $request->Q_12;
        $participacion->Q_13 = $request->Q_13;
        $participacion->Q_14 = $request->Q_14;
        $participacion->Q_15 = $request->Q_15;
        $participacion->Q_16 = $request->Q_16;
        $participacion->Q_17 = $request->Q_17;
        $participacion->Q_18 = $request->Q_18;
        $participacion->Q_19 = $request->Q_19;
        $participacion->Q_20 = $request->Q_20;
        $participacion->Q_21 = $request->Q_21;
        $participacion->mayor_problema = $request->mayor_problema;

        $participacion->save();


        return $participacion;


     }


}
