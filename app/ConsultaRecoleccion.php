<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultaRecoleccion extends Model
{
    //
    public function gRV($value){
      $data = round($value);
      return $data;
    }

    public function obtenerGenero($option){
      //Query Genero
      if($option == 'general'){
        $h_query  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.genero')->where('participacion.genero',1)->count();
        $m_query  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.genero')->where('participacion.genero',2)->count();
        $o_query  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.genero')->where('participacion.genero',3)->count();

      }else{
        $h_query  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.genero')->where('participacion.genero',1)->where('municipio_residencia',$option)->count();
        $m_query  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.genero')->where('participacion.genero',2)->where('municipio_residencia',$option)->count();
        $o_query  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.genero')->where('participacion.genero',3)->where('municipio_residencia',$option)->count();

      }

      $genero_total = $h_query + $m_query+ $o_query;

      if($genero_total == 0){
        $hombres = 0;
        $mujeres = 0;
        $otros = 0;
      }else{
        $hombres = $h_query * 100 / $genero_total;
        $mujeres = $m_query * 100 / $genero_total;
        $otros = $o_query * 100 / $genero_total;
      }

      $datos_genero = array('hombres'=> $this->gRV($hombres), 'mujeres' => $this->gRV($mujeres),'otros' => $this->gRV($otros));

      return $datos_genero;

    }

    public function obtenerOcupacion($option){

      //Query Genero
      if($option == 'general'){
        $o_estudiante = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','estudiante')->count();
        $o_empleado = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','empleado')->count();
        $o_independiente = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','independiente')->count();
        $o_desempleado= \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','desempleado')->count();
        $o_hogar = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','hogar')->count();

      }else{

        $o_estudiante = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','estudiante')->where('municipio_residencia',$option)->count();
        $o_empleado = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','empleado')->where('municipio_residencia',$option)->count();
        $o_independiente = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','independiente')->where('municipio_residencia',$option)->count();
        $o_desempleado= \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','desempleado')->where('municipio_residencia',$option)->count();
        $o_hogar = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','hogar')->where('municipio_residencia',$option)->count();

      }

      $ocupacion_total = $o_estudiante+$o_empleado+$o_independiente+$o_desempleado+$o_hogar;
      $estudiante = $o_estudiante * 100 / $ocupacion_total;
      $empleado = $o_empleado * 100 / $ocupacion_total;
      $independiente = $o_independiente * 100 / $ocupacion_total;
      $desempleado = $o_desempleado * 100 / $ocupacion_total;
      $hogar = $o_hogar * 100 / $ocupacion_total;

      $datos_ocupacion = array('estudiante'=> $this->gRV($estudiante), 'empleado' => $this->gRV($empleado),'independiente'=> $this->gRV($independiente), 'desempleado' => $this->gRV($desempleado),'hogar'=> $this->gRV($hogar));

      return $datos_ocupacion;
    }

    public function obtenerDiscapacidad($option){
      //Query discapacidad

      if($option == 'general'){
        $d_si = \DB::table('participaciones_recoleccion as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',1)->count();
        $d_no = \DB::table('participaciones_recoleccion as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',0)->count();
      }else{
        $d_si = \DB::table('participaciones_recoleccion as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',1)->where('municipio_residencia',$option)->count();
        $d_no = \DB::table('participaciones_recoleccion as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',0)->where('municipio_residencia',$option)->count();
      }

      $discapacidad_total = $d_si + $d_no;
      $discapacidad_si = $d_si * 100 / $discapacidad_total;
      $discapacidad_no = $d_no * 100 / $discapacidad_total;
      $datos_discapacidad = array('si'=> $this->gRV($discapacidad_si), 'no' => $this->gRV($discapacidad_no));
      return $datos_discapacidad;
    }

    public function obtenerNivelEducativo($option){
      //Query Nivel Educativo

      if($option == 'general'){
        $n_e_primaria = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','primaria')->count();
        $n_e_secundaria = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','secundaria')->count();
        $n_e_tecnica = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','tecnica')->count();
        $n_e_universitaria = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','universitaria')->count();
        $n_e_ninguna = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','ninguna')->count();
      }else{
        $n_e_primaria = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','primaria')->where('municipio_residencia',$option)->count();
        $n_e_secundaria = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','secundaria')->where('municipio_residencia',$option)->count();
        $n_e_tecnica = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','tecnica')->where('municipio_residencia',$option)->count();
        $n_e_universitaria = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','universitaria')->where('municipio_residencia',$option)->count();
        $n_e_ninguna = \DB::table('participaciones_recoleccion as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','ninguna')->where('municipio_residencia',$option)->count();
      }

      $nivel_educativo_total = $n_e_primaria + $n_e_secundaria + $n_e_tecnica + $n_e_universitaria + $n_e_ninguna;
      $primaria = $n_e_primaria * 100 / $nivel_educativo_total;
      $secundaria = $n_e_secundaria * 100 / $nivel_educativo_total;
      $tecnica = $n_e_tecnica * 100 / $nivel_educativo_total;
      $universitaria = $n_e_universitaria * 100 / $nivel_educativo_total;
      $ninguna = $n_e_ninguna * 100 / $nivel_educativo_total;
      $datos_nivel_educativo = array('primaria'=> $this->gRV($primaria), 'secundaria' => $this->gRV($secundaria),'tecnica' => $this->gRV($tecnica),'universitaria' => $this->gRV($universitaria),'ninguna' => $this->gRV($ninguna));

      return $datos_nivel_educativo;
    }

    public function obtenerRegimenSalud($option){
      if($option == 'general'){
        $count_subsidiado  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','subsidiado')->count();
        $count_contributivo  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','contributivo')->count();
      }else{
        $count_subsidiado  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','subsidiado')->where('municipio_residencia',$option)->count();
        $count_contributivo  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','contributivo')->where('municipio_residencia',$option)->count();
      }


      $regimen_salud_total = $count_subsidiado + $count_contributivo;
      $subsidiado = $count_subsidiado * 100 / $regimen_salud_total;
      $contributivo = $count_contributivo * 100 / $regimen_salud_total;
      $data = array('subsidiado'=> $subsidiado, 'contributivo' => $contributivo);

      return $data;
    }

    public function obtenerSector($option){

      if($option == 'general'){
        $count_rural  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector')->where('participacion.sector',1)->count();
        $count_urbano  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector')->where('participacion.sector',2)->count();
      }else{
        $count_rural  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector')->where('participacion.sector',1)->count();
        $count_urbano  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector')->where('participacion.sector',2)->count();
      }
      $Sector_total = $count_rural + $count_urbano;
      $rural = $count_rural * 100 / $Sector_total;
      $urbano = $count_urbano * 100 / $Sector_total;
      $datos_sector = array('urbano'=> $this->gRV($urbano), 'rural' => $this->gRV($rural));

      return $datos_sector;
    }

    public function obtenerSalidoDepartamento(){
      $count_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ha_salido_departamento')->where('participacion.ha_salido_departamento',1)->count();
      $count_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ha_salido_departamento')->where('participacion.ha_salido_departamento',0)->count();
      $total_salido = $count_si + $count_no;
      $sisalido = $count_si * 100 / $total_salido;
      $nosalido = $count_no * 100 / $total_salido;
      $datos_salidos = array('sisalido'=> $sisalido, 'nosalido' => $nosalido);

      return $datos_salidos;
    }

    public function obtenerSalidoMunicipio(){
      $count_si_m  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ha_salido_municipio')->where('participacion.ha_salido_municipio',1)->count();
      $count_no_m  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ha_salido_municipio')->where('participacion.ha_salido_municipio',0)->count();
      $total_salido = $count_si_m + $count_no_m;
      $sisalidom = $count_si_m * 100 / $total_salido;
      $nosalidom = $count_no_m * 100 / $total_salido;
      $datos_salidos_m = array('sisalidom'=> $sisalidom, 'nosalidom' => $nosalidom);

      return $datos_salidos_m;
    }

    public function obtenerActores(){
      $count_ninguno  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Ninguno')->count();
      $count_transporte  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Transporte y vías')->count();
      $count_infraestructura  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Infraestructura y servicios públicos')->count();
      $count_gremios  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Gremios')->count();
      $count_ambiente  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();

      $total_actores = $count_ninguno + $count_transporte + $count_infraestructura + $count_gremios + $count_ambiente;
      $ninguno = $count_ninguno * 100 / $total_actores;
      $transporte = $count_transporte * 100 / $total_actores;
      $infraestructura = $count_infraestructura * 100 / $total_actores;
      $gremios = $count_gremios * 100 / $total_actores;
      $ambiente = $count_ambiente * 100 / $total_actores;

      $datos_actores = array('ninguno'=> $ninguno, 'transporte' => $transporte, 'infraestructura' => $infraestructura, 'gremios' => $gremios, 'ambiente' => $ambiente);

      return $datos_actores;
    }

    public function obtenerCondicionesFisicas(){
      $count_material  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','material')->count();
      $count_palafitica  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','palafitica')->count();
      $count_bareque  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','bareque')->count();
      $total_condiciones = $count_material + $count_palafitica + $count_bareque;
      $material = $count_material * 100 / $total_condiciones;
      $palafitica = $count_palafitica * 100 / $total_condiciones;
      $bareque = $count_bareque * 100 / $total_condiciones;
      $datos_condiciones = array('material'=> $material, 'palafitica' => $palafitica, 'bareque' => $bareque);

      return $datos_condiciones;
    }

    public function obtenerViviendaEs(){
      $count_familiar  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','familiar')->count();
      $count_arrendada  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','arrendada')->count();
      $count_propia  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','propia')->count();
      $total_vivienda = $count_familiar + $count_arrendada + $count_propia;
      $familiar = $count_familiar * 100 / $total_vivienda;
      $arrendada = $count_arrendada * 100 / $total_vivienda;
      $propia = $count_propia * 100 / $total_vivienda;
      $datos_viviendas = array('familiar'=> $familiar, 'arrendada' => $arrendada, 'propia' => $propia);

      return $datos_viviendas;
    }

    public function obtenerServicios($option){
      if($option == 'general'){
        $count_agua_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.vivienda_cuenta_agua_potable','si')->count();
        $count_agua_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.vivienda_cuenta_agua_potable','no')->count();
        $count_alcantarillado_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.vivienda_cuenta_alcantarillado','si')->count();
        $count_alcantarillado_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.vivienda_cuenta_alcantarillado','no')->count();
        $count_energia_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.vivienda_cuenta_energia','si')->count();
        $count_energia_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.vivienda_cuenta_energia','no')->count();
        $count_gas_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.vivienda_cuenta_gas','si')->count();
        $count_gas_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.vivienda_cuenta_gas','no')->count();
        $count_recoleccion_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->count();
        $count_recoleccion_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->count();

      }else{
        $count_agua_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.vivienda_cuenta_agua_potable','si')->where('municipio_residencia',$option)->count();
        $count_agua_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.vivienda_cuenta_agua_potable','no')->where('municipio_residencia',$option)->count();
        $count_alcantarillado_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.vivienda_cuenta_alcantarillado','si')->where('municipio_residencia',$option)->count();
        $count_alcantarillado_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.vivienda_cuenta_alcantarillado','no')->where('municipio_residencia',$option)->count();
        $count_energia_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.vivienda_cuenta_energia','si')->where('municipio_residencia',$option)->count();
        $count_energia_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.vivienda_cuenta_energia','no')->where('municipio_residencia',$option)->count();
        $count_gas_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.vivienda_cuenta_gas','si')->where('municipio_residencia',$option)->count();
        $count_gas_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.vivienda_cuenta_gas','no')->where('municipio_residencia',$option)->count();
        $count_recoleccion_si  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->where('participacion.vivienda_cuenta_recoleccion_basura','si')->where('municipio_residencia',$option)->count();
        $count_recoleccion_no  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->where('participacion.vivienda_cuenta_recoleccion_basura','no')->where('municipio_residencia',$option)->count();

      }

      $total_agua = $count_agua_si + $count_agua_no;
      $agua_si = $count_agua_si * 100 / $total_agua;
      $agua_no = $count_agua_no * 100 / $total_agua;

      $total_alcantarillado = $count_alcantarillado_si + $count_alcantarillado_no;
      $alcantarillado_si = $count_alcantarillado_si * 100 / $total_alcantarillado;
      $alcantarillado_no = $count_alcantarillado_no * 100 / $total_alcantarillado;

      $total_energia = $count_energia_si + $count_energia_no;
      $energia_si = $count_energia_si * 100 / $total_energia;
      $energia_no = $count_energia_no * 100 / $total_energia;

      $total_gas = $count_gas_si + $count_gas_no;
      $gas_si = $count_gas_si * 100 / $total_gas;
      $gas_no = $count_gas_no * 100 / $total_gas;

      $total_recoleccion = $count_recoleccion_si + $count_recoleccion_no;

      $recoleccion_si = $count_recoleccion_si * 100 / $total_recoleccion;
      $recoleccion_no = $count_recoleccion_no * 100 / $total_recoleccion;

      $datos_servicios = array('agua_si'=> $agua_si, 'agua_no' => $agua_no, 'alcantarillado_si' => $alcantarillado_si, 'alcantarillado_no' => $alcantarillado_no, 'energia_si' => $energia_si, 'energia_no' => $energia_no, 'gas_si' =>$gas_si, 'gas_no' =>$gas_no, 'recoleccion_si' =>$recoleccion_si, 'recoleccion_no' =>$recoleccion_no);

      return $datos_servicios;
    }

    public function obtenerSuelo(){
      $count_ganaderia  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','ganaderia')->count();
      $count_vivienda  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','vivienda')->count();
      $count_comercio  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','comercio')->count();
      $count_mineria  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','mineria')->count();
      $count_conservacion  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','conservacion')->count();
      $count_industria  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','industria')->count();
      $count_proteccion  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','proteccion')->count();
      $count_vias  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','vias')->count();
      $count_agricultura  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','agricultura')->count();

      $total_suelo = $count_ganaderia + $count_vivienda + $count_comercio + $count_mineria + $count_conservacion + $count_industria + $count_proteccion + $count_vias + $count_agricultura;
      $ganaderia = $count_ganaderia * 100 / $total_suelo;
      $vivienda = $count_vivienda * 100 / $total_suelo;
      $comercio = $count_comercio * 100 / $total_suelo;
      $mineria = $count_mineria * 100 / $total_suelo;
      $conservacion = $count_conservacion * 100 / $total_suelo;
      $industria = $count_industria * 100 / $total_suelo;
      $proteccion = $count_proteccion * 100 / $total_suelo;
      $vias = $count_vias * 100 / $total_suelo;
      $agricultura = $count_agricultura * 100 / $total_suelo;

      $datos_suelo = array('ganaderia'=> $ganaderia, 'vivienda' => $vivienda, 'comercio' => $comercio, 'mineria' => $mineria, 'conservacion' => $conservacion, 'industria' => $industria, 'proteccion' => $proteccion, 'vias' => $vias, 'agricultura' => $agricultura);

      return $datos_suelo;
    }

    public function obtenerMunicipios(){
      //$count_otro  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','otro')->where('participacion.ubicacion_solucion_social','otro')->where('participacion.ubicacion_solucion_economico','otro')->count();
      $count_nechi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','nechi')->orWhere('participacion.ubicacion_solucion_social','nechi')->orWhere('participacion.ubicacion_solucion_economico','nechi')->count();
      $count_achi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','achi')->orWhere('participacion.ubicacion_solucion_social','achi')->orWhere('participacion.ubicacion_solucion_economico','achi')->count();
      $count_magangue  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','magangue')->orWhere('participacion.ubicacion_solucion_social','magangue')->orWhere('participacion.ubicacion_solucion_economico','magangue')->count();
      $count_san_jacinto_cauca  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','san-jacinto-cauca')->orWhere('participacion.ubicacion_solucion_social','san-jacinto-cauca')->orWhere('participacion.ubicacion_solucion_economico','san-jacinto-cauca')->count();
      $count_ayapel  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','ayapel')->orWhere('participacion.ubicacion_solucion_social','ayapel')->orWhere('participacion.ubicacion_solucion_economico','ayapel')->count();
      $count_caimito  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','caimito')->orWhere('participacion.ubicacion_solucion_social','caimito')->orWhere('participacion.ubicacion_solucion_economico','caimito')->count();
      $count_guaranda  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','guaranda')->orWhere('participacion.ubicacion_solucion_social','guaranda')->orWhere('participacion.ubicacion_solucion_economico','guaranda')->count();
      $count_majagual  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','majagual')->orWhere('participacion.ubicacion_solucion_social','majagual')->orWhere('participacion.ubicacion_solucion_economico','majagual')->count();
      $count_san_benito_abad  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','san-benito-abad')->orWhere('participacion.ubicacion_solucion_social','san-benito-abad')->orWhere('participacion.ubicacion_solucion_economico','san-benito-abad')->count();
      $count_san_marcos  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','san-marcos')->orWhere('participacion.ubicacion_solucion_social','san-marcos')->orWhere('participacion.ubicacion_solucion_economico','san-marcos')->count();
      $count_sucre  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','sucre')->orWhere('participacion.ubicacion_solucion_social','sucre')->orWhere('participacion.ubicacion_solucion_economico','sucre')->count();


      $total_municipios =  $count_nechi + $count_achi + $count_magangue + $count_san_jacinto_cauca + $count_ayapel + $count_caimito + $count_guaranda + $count_majagual + $count_san_benito_abad + $count_san_marcos + $count_sucre;
      $nechi = $count_nechi * 100 / $total_municipios;
      $achi = $count_achi * 100 / $total_municipios;
      $magangue = $count_magangue * 100 / $total_municipios;
      $san_jacinto_cauca = $count_san_jacinto_cauca * 100 / $total_municipios;
      $ayapel = $count_ayapel * 100 / $total_municipios;
      $caimito = $count_caimito * 100 / $total_municipios;
      $guaranda = $count_guaranda * 100 / $total_municipios;
      $majagual = $count_majagual * 100 / $total_municipios;
      $san_benito_abad = $count_san_benito_abad * 100 / $total_municipios;
      $san_marcos = $count_san_marcos * 100 / $total_municipios;
      $sucre = $count_sucre * 100 / $total_municipios;
      $datos_municipios = array(
        'nechi'=> $nechi,
        'achi' => $achi,
        'magangue' => $magangue,
        'san_jacinto_cauca' => $san_jacinto_cauca,
        'ayapel' => $ayapel,
        'caimito' => $caimito,
        'guaranda' => $guaranda,
        'majagual' => $majagual,
        'san_benito_abad' => $san_benito_abad,
        'san_marcos' => $san_marcos,
        'sucre' => $sucre
      );

      return $datos_municipios;
    }

    public function obtenerVariablesAmbientales(){

      $c_count01  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',1)->count();
      $c_count02  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',2)->count();
      $c_count03  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',3)->count();
      $c_count04  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',4)->count();
      $c_count05  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',5)->count();
      $c_count06  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',6)->count();
      $c_count07  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',7)->count();
      $c_count08  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',8)->count();
      $c_count09  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',9)->count();
      $c_count10  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',10)->count();
      $c_count11  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',11)->count();
      $c_count12  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',12)->count();

      $variables_ambiental_total = $c_count01 + $c_count02 + $c_count03 + $c_count04 + $c_count05 + $c_count06 + $c_count06 + $c_count07 + $c_count08 + $c_count09 + $c_count10 + $c_count11 + $c_count12;

      $v_01 = $c_count01 * 100 / $variables_ambiental_total;
      $v_02 = $c_count02 * 100 / $variables_ambiental_total;
      $v_03 = $c_count03 * 100 / $variables_ambiental_total;
      $v_04 = $c_count04 * 100 / $variables_ambiental_total;
      $v_05 = $c_count05 * 100 / $variables_ambiental_total;
      $v_06 = $c_count06 * 100 / $variables_ambiental_total;
      $v_07 = $c_count07 * 100 / $variables_ambiental_total;
      $v_08 = $c_count08 * 100 / $variables_ambiental_total;
      $v_09 = $c_count09 * 100 / $variables_ambiental_total;
      $v_10 = $c_count10 * 100 / $variables_ambiental_total;
      $v_11 = $c_count11 * 100 / $variables_ambiental_total;
      $v_12 = $c_count12 * 100 / $variables_ambiental_total;

      $data = array('01'=> $v_01, '02' => $v_02, '03' => $v_03, '04' => $v_04, '05' => $v_05, '06' => $v_06, '07' => $v_07, '08' => $v_08, '09' => $v_09, '10' => $v_10
                  , '11' => $v_11, '12' => $v_12);

      return $data;

    }

    public function obtenerVariablesSocial(){

      $c_count13  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',13)->count();
      $c_count14  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',14)->count();
      $c_count15  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',15)->count();
      $c_count16  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',16)->count();
      $c_count17  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',17)->count();
      $c_count18  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',18)->count();
      $c_count19  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',19)->count();
      $c_count20  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',20)->count();
      $c_count21  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',21)->count();
      $c_count22  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',22)->count();
      $c_count23  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',23)->count();
      $c_count24  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',24)->count();
      $c_count25  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',25)->count();
      $c_count26  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',26)->count();
      $c_count27  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',27)->count();
      $c_count28  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',28)->count();
      $c_count29  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',29)->count();
      $c_count30  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',30)->count();
      $c_count31  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',31)->count();
      $c_count32  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',32)->count();
      $c_count33  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',33)->count();
      $c_count34  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',34)->count();


      $variables_social_total = $c_count13 + $c_count14 + $c_count15 + $c_count16 + $c_count17 + $c_count18 + $c_count19 + $c_count20
                                 + $c_count21 + $c_count22 + $c_count23 + $c_count24 + $c_count25 + $c_count26 + $c_count27 + $c_count28
                                 + $c_count29 + $c_count30 + $c_count31 + $c_count32 + $c_count33 + $c_count34 ;

      $v_13 = $c_count13 * 100 / $variables_social_total;
      $v_14 = $c_count14 * 100 / $variables_social_total;
      $v_15 = $c_count15 * 100 / $variables_social_total;
      $v_16 = $c_count16 * 100 / $variables_social_total;
      $v_17 = $c_count17 * 100 / $variables_social_total;
      $v_18 = $c_count18 * 100 / $variables_social_total;
      $v_19 = $c_count19 * 100 / $variables_social_total;
      $v_20 = $c_count20 * 100 / $variables_social_total;
      $v_21 = $c_count21 * 100 / $variables_social_total;
      $v_22 = $c_count22 * 100 / $variables_social_total;
      $v_23 = $c_count23 * 100 / $variables_social_total;
      $v_24 = $c_count24 * 100 / $variables_social_total;
      $v_25 = $c_count25 * 100 / $variables_social_total;
      $v_26 = $c_count26 * 100 / $variables_social_total;
      $v_27 = $c_count27 * 100 / $variables_social_total;
      $v_28 = $c_count28 * 100 / $variables_social_total;
      $v_29 = $c_count29 * 100 / $variables_social_total;
      $v_30 = $c_count30 * 100 / $variables_social_total;
      $v_31 = $c_count31 * 100 / $variables_social_total;
      $v_32 = $c_count32 * 100 / $variables_social_total;
      $v_33 = $c_count33 * 100 / $variables_social_total;
      $v_34 = $c_count34 * 100 / $variables_social_total;

      $data = array('13'=> $v_13,'14'=> $v_14, '15' => $v_15, '16' => $v_16, '17' => $v_17, '18' => $v_18,
                    '19'=> $v_19, '20' => $v_20, '21' => $v_21, '22' => $v_22, '23' => $v_23,
                    '24' => $v_24, '25' => $v_25, '26' => $v_26, '27' => $v_27,'28' => $v_28,
                    '29' => $v_29, '30' => $v_30, '31' => $v_31, '32' => $v_32,'33'=> $v_33, '34' => $v_34);

      return $data;


    }

    public function obtenerVariablesEconomicas(){

      $c_count35  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',35)->count();
      $c_count36  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',36)->count();
      $c_count37  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',37)->count();
      $c_count38  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',38)->count();
      $c_count39  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',39)->count();
      $c_count40  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',40)->count();
      $c_count41  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',41)->count();
      $c_count42  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',42)->count();
      $c_count43  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',43)->count();


      $variables_economico_total = $c_count35 + $c_count36 + $c_count37 + $c_count38 + $c_count39 + $c_count40 + $c_count41 + $c_count42 + $c_count43;

      $v_35 = $c_count35 * 100 / $variables_economico_total;
      $v_36 = $c_count36 * 100 / $variables_economico_total;
      $v_37 = $c_count37 * 100 / $variables_economico_total;
      $v_38 = $c_count38 * 100 / $variables_economico_total;
      $v_39 = $c_count39 * 100 / $variables_economico_total;
      $v_40 = $c_count40 * 100 / $variables_economico_total;
      $v_41 = $c_count41 * 100 / $variables_economico_total;
      $v_42 = $c_count42 * 100 / $variables_economico_total;
      $v_43 = $c_count43 * 100 / $variables_economico_total;


      $data = array('35'=> $v_35, '36' => $v_36, '37' => $v_37, '38' => $v_38, '39' => $v_39, '40' => $v_40, '41' => $v_41, '42' => $v_42, '43' => $v_43);

      return $data;

    }

    public function obtenerCountMunicipiosAmbientales(){

      $c_achi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','achi')->count();
      $c_ayapel  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','ayapel')->count();
      $c_caimito  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','caimito')->count();
      $c_guaranda  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','guaranda')->count();
      $c_magangue  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','magangue')->count();
      $c_majagual  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','majagual')->count();
      $c_nechi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','nechi')->count();
      $c_san_benito_abad  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','san-benito-abad')->count();
      $c_san_jacinto_cauca  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','san-jacinto-cauca')->count();
      $c_san_marcos  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','san-marcos')->count();
      $c_sucre  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','sucre')->count();


      $total_count_municipios = $c_achi + $c_ayapel + $c_caimito + $c_guaranda + $c_magangue + $c_majagual + $c_nechi + $c_san_benito_abad + $c_san_jacinto_cauca + $c_san_marcos + $c_sucre;

      $achi = $c_achi * 100 / $total_count_municipios;
      $ayapel = $c_ayapel * 100 / $total_count_municipios;
      $caimito = $c_caimito * 100 / $total_count_municipios;
      $guaranda = $c_guaranda * 100 / $total_count_municipios;
      $magangue = $c_magangue * 100 / $total_count_municipios;
      $majagual = $c_majagual * 100 / $total_count_municipios;
      $nechi = $c_nechi * 100 / $total_count_municipios;
      $san_benito_abad = $c_san_benito_abad * 100 / $total_count_municipios;
      $san_jacinto_cauca = $c_san_jacinto_cauca * 100 / $total_count_municipios;
      $san_marcos = $c_san_marcos * 100 / $total_count_municipios;
      $sucre = $c_sucre * 100 / $total_count_municipios;


      $data = array('achi'=> $achi, 'ayapel' => $ayapel, 'caimito' => $caimito, 'guaranda' => $guaranda, 'magangue' => $magangue, 'majagual' => $majagual, 'nechi' => $nechi,
      'san_benito_abad' => $san_benito_abad,'san_jacinto_cauca' => $san_jacinto_cauca,'san_marcos' => $san_marcos,'sucre' => $sucre);

      return $data;


    }

    public function obtenerCountMunicipiosSociales(){

      $c_achi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','achi')->count();
      $c_ayapel  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','ayapel')->count();
      $c_caimito  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','caimito')->count();
      $c_guaranda  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','guaranda')->count();
      $c_magangue  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','magangue')->count();
      $c_majagual  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','majagual')->count();
      $c_nechi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','nechi')->count();
      $c_san_benito_abad  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','san-benito-abad')->count();
      $c_san_jacinto_cauca  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','san-jacinto-cauca')->count();
      $c_san_marcos  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','san-marcos')->count();
      $c_sucre  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','sucre')->count();


      $total_count_municipios = $c_achi + $c_ayapel + $c_caimito + $c_guaranda + $c_magangue + $c_majagual + $c_nechi + $c_san_benito_abad + $c_san_jacinto_cauca + $c_san_marcos + $c_sucre;

      $achi = $c_achi * 100 / $total_count_municipios;
      $ayapel = $c_ayapel * 100 / $total_count_municipios;
      $caimito = $c_caimito * 100 / $total_count_municipios;
      $guaranda = $c_guaranda * 100 / $total_count_municipios;
      $magangue = $c_magangue * 100 / $total_count_municipios;
      $majagual = $c_majagual * 100 / $total_count_municipios;
      $nechi = $c_nechi * 100 / $total_count_municipios;
      $san_benito_abad = $c_san_benito_abad * 100 / $total_count_municipios;
      $san_jacinto_cauca = $c_san_jacinto_cauca * 100 / $total_count_municipios;
      $san_marcos = $c_san_marcos * 100 / $total_count_municipios;
      $sucre = $c_sucre * 100 / $total_count_municipios;


      $data = array('achi'=> $achi, 'ayapel' => $ayapel, 'caimito' => $caimito, 'guaranda' => $guaranda, 'magangue' => $magangue, 'majagual' => $majagual, 'nechi' => $nechi,
      'san_benito_abad' => $san_benito_abad,'san_jacinto_cauca' => $san_jacinto_cauca,'san_marcos' => $san_marcos,'sucre' => $sucre);

      return $data;

    }

    public function obtenerCountMunicipiosEconomicos(){

      $c_achi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','achi')->count();
      $c_ayapel  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','ayapel')->count();
      $c_caimito  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','caimito')->count();
      $c_guaranda  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','guaranda')->count();
      $c_magangue  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','magangue')->count();
      $c_majagual  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','majagual')->count();
      $c_nechi  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','nechi')->count();
      $c_san_benito_abad  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','san-benito-abad')->count();
      $c_san_jacinto_cauca  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','san-jacinto-cauca')->count();
      $c_san_marcos  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','san-marcos')->count();
      $c_sucre  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','sucre')->count();


      $total_count_municipios = $c_achi + $c_ayapel + $c_caimito + $c_guaranda + $c_magangue + $c_majagual + $c_nechi + $c_san_benito_abad + $c_san_jacinto_cauca + $c_san_marcos + $c_sucre;

      $achi = $c_achi * 100 / $total_count_municipios;
      $ayapel = $c_ayapel * 100 / $total_count_municipios;
      $caimito = $c_caimito * 100 / $total_count_municipios;
      $guaranda = $c_guaranda * 100 / $total_count_municipios;
      $magangue = $c_magangue * 100 / $total_count_municipios;
      $majagual = $c_majagual * 100 / $total_count_municipios;
      $nechi = $c_nechi * 100 / $total_count_municipios;
      $san_benito_abad = $c_san_benito_abad * 100 / $total_count_municipios;
      $san_jacinto_cauca = $c_san_jacinto_cauca * 100 / $total_count_municipios;
      $san_marcos = $c_san_marcos * 100 / $total_count_municipios;
      $sucre = $c_sucre * 100 / $total_count_municipios;


      $data = array('achi'=> $achi, 'ayapel' => $ayapel, 'caimito' => $caimito, 'guaranda' => $guaranda, 'magangue' => $magangue, 'majagual' => $majagual, 'nechi' => $nechi,
      'san_benito_abad' => $san_benito_abad,'san_jacinto_cauca' => $san_jacinto_cauca,'san_marcos' => $san_marcos,'sucre' => $sucre);

      return $data;
    }

    public function obtenerQuestions(){

      $count_Q_01_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_01')->where('participacion.Q_01','E')->count();
      $count_Q_01_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_01')->where('participacion.Q_01','B')->count();
      $count_Q_01_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_01')->where('participacion.Q_01','M')->count();
      $count_Q_01_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_01')->where('participacion.Q_01','NE')->count();

      $total_questions1 = $count_Q_01_E + $count_Q_01_B + $count_Q_01_M + $count_Q_01_NE;
      $e01 = $count_Q_01_E * 100 / $total_questions1;
      $b01 = $count_Q_01_B * 100 / $total_questions1;
      $m01 = $count_Q_01_M * 100 / $total_questions1;
      $ne01 = $count_Q_01_NE * 100 / $total_questions1;
      $q_01 = array('e'=> $this->gRV($e01), 'b' => $this->gRV($b01), 'm' =>$this->gRV($m01), 'ne' => $this->gRV($ne01));

      $count_Q_02_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_02')->where('participacion.Q_02','E')->count();
      $count_Q_02_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_02')->where('participacion.Q_02','B')->count();
      $count_Q_02_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_02')->where('participacion.Q_02','M')->count();
      $count_Q_02_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_02')->where('participacion.Q_02','NE')->count();

      $total_questions2 = $count_Q_02_E + $count_Q_02_B + $count_Q_02_M + $count_Q_02_NE;
      $e02 = $count_Q_02_E * 100 / $total_questions2;
      $b02 = $count_Q_02_B * 100 / $total_questions2;
      $m02 = $count_Q_02_M * 100 / $total_questions2;
      $ne02 = $count_Q_02_NE * 100 / $total_questions2;
      $q_02 = array('e'=> $this->gRV($e02), 'b' => $this->gRV($b02), 'm' => $this->gRV($m02), 'ne' => $this->gRV($ne02));

      $count_Q_03_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_03')->where('participacion.Q_03','E')->count();
      $count_Q_03_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_03')->where('participacion.Q_03','B')->count();
      $count_Q_03_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_03')->where('participacion.Q_03','M')->count();
      $count_Q_03_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_03')->where('participacion.Q_03','NE')->count();

      $total_questions3 = $count_Q_03_E + $count_Q_03_B + $count_Q_03_M + $count_Q_03_NE;
      $e03 = $count_Q_03_E * 100 / $total_questions3;
      $b03 = $count_Q_03_B * 100 / $total_questions3;
      $m03 = $count_Q_03_M * 100 / $total_questions3;
      $ne03 = $count_Q_03_NE * 100 / $total_questions3;
      $q_03 = array('e'=> $this->gRV($e03), 'b' => $this->gRV($b03), 'm' => $this->gRV($m03), 'ne' => $this->gRV($ne03));

      $count_Q_04_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_04')->where('participacion.Q_04','E')->count();
      $count_Q_04_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_04')->where('participacion.Q_04','B')->count();
      $count_Q_04_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_04')->where('participacion.Q_04','M')->count();
      $count_Q_04_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_04')->where('participacion.Q_04','NE')->count();

      $total_questions4 = $count_Q_04_E + $count_Q_04_B + $count_Q_04_M + $count_Q_04_NE;
      $e04 = $count_Q_04_E * 100 / $total_questions4;
      $b04 = $count_Q_04_B * 100 / $total_questions4;
      $m04 = $count_Q_04_M * 100 / $total_questions4;
      $ne04 = $count_Q_04_NE * 100 / $total_questions4;
      $q_04 = array('e'=> $this->gRV($e04), 'b' => $this->gRV($b04), 'm' => $this->gRV($m04), 'ne' => $this->gRV($ne04));

      $count_Q_05_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_05')->where('participacion.Q_05','E')->count();
      $count_Q_05_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_05')->where('participacion.Q_05','B')->count();
      $count_Q_05_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_05')->where('participacion.Q_05','M')->count();
      $count_Q_05_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_05')->where('participacion.Q_05','NE')->count();

      $total_questions5 = $count_Q_05_E + $count_Q_05_B + $count_Q_05_M + $count_Q_05_NE;
      $e05 = $count_Q_05_E * 100 / $total_questions5;
      $b05 = $count_Q_05_B * 100 / $total_questions5;
      $m05 = $count_Q_05_M * 100 / $total_questions5;
      $ne05 = $count_Q_05_NE * 100 / $total_questions5;
      $q_05 = array('e'=> $this->gRV($e05), 'b' => $this->gRV($b05), 'm' => $this->gRV($m05), 'ne' => $this->gRV($ne05));

      $count_Q_06_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_06')->where('participacion.Q_06','E')->count();
      $count_Q_06_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_06')->where('participacion.Q_06','B')->count();
      $count_Q_06_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_06')->where('participacion.Q_06','M')->count();
      $count_Q_06_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_06')->where('participacion.Q_06','NE')->count();

      $total_questions6 = $count_Q_06_E + $count_Q_06_B + $count_Q_06_M + $count_Q_06_NE;
      $e06 = $count_Q_06_E * 100 / $total_questions6;
      $b06 = $count_Q_06_B * 100 / $total_questions6;
      $m06 = $count_Q_06_M * 100 / $total_questions6;
      $ne06 = $count_Q_06_NE * 100 / $total_questions6;
      $q_06 = array('e'=> $this->gRV($e06), 'b' => $this->gRV($b06), 'm' => $this->gRV($m06), 'ne' => $this->gRV($ne06));

      $count_Q_07_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_07')->where('participacion.Q_07','E')->count();
      $count_Q_07_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_07')->where('participacion.Q_07','B')->count();
      $count_Q_07_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_07')->where('participacion.Q_07','M')->count();
      $count_Q_07_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_07')->where('participacion.Q_07','NE')->count();

      $total_questions7 = $count_Q_07_E + $count_Q_07_B + $count_Q_07_M + $count_Q_07_NE;
      $e07 = $count_Q_07_E * 100 / $total_questions7;
      $b07 = $count_Q_07_B * 100 / $total_questions7;
      $m07 = $count_Q_07_M * 100 / $total_questions7;
      $ne07 = $count_Q_07_NE * 100 / $total_questions7;
      $q_07 = array('e'=> $this->gRV($e07), 'b' => $this->gRV($b07), 'm' => $this->gRV($m07), 'ne' => $this->gRV($ne07));

      $count_Q_08_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_08')->where('participacion.Q_08','E')->count();
      $count_Q_08_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_08')->where('participacion.Q_08','B')->count();
      $count_Q_08_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_08')->where('participacion.Q_08','M')->count();
      $count_Q_08_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_08')->where('participacion.Q_08','NE')->count();

      $total_questions8 = $count_Q_08_E + $count_Q_08_B + $count_Q_08_M + $count_Q_08_NE;
      $e08 = $count_Q_08_E * 100 / $total_questions8;
      $b08 = $count_Q_08_B * 100 / $total_questions8;
      $m08 = $count_Q_08_M * 100 / $total_questions8;
      $ne08 = $count_Q_08_NE * 100 / $total_questions8;
      $q_08 = array('e'=> $this->gRV($e08), 'b' => $this->gRV($b08), 'm' => $this->gRV($m08), 'ne' => $this->gRV($ne08));


      $count_Q_09_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_09')->where('participacion.Q_09','E')->count();
      $count_Q_09_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_09')->where('participacion.Q_09','B')->count();
      $count_Q_09_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_09')->where('participacion.Q_09','M')->count();
      $count_Q_09_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_09')->where('participacion.Q_09','NE')->count();

      $total_questions9 = $count_Q_09_E + $count_Q_09_B + $count_Q_09_M + $count_Q_09_NE;
      $e09 = $count_Q_09_E * 100 / $total_questions9;
      $b09 = $count_Q_09_B * 100 / $total_questions9;
      $m09 = $count_Q_09_M * 100 / $total_questions9;
      $ne09 = $count_Q_09_NE * 100 / $total_questions9;
      $q_09 = array('e'=> $this->gRV($e09), 'b' => $this->gRV($b09), 'm' => $this->gRV($m09), 'ne' => $this->gRV($ne09));

      $count_Q_10_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_10')->where('participacion.Q_10','E')->count();
      $count_Q_10_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_10')->where('participacion.Q_10','B')->count();
      $count_Q_10_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_10')->where('participacion.Q_10','M')->count();
      $count_Q_10_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_10')->where('participacion.Q_10','NE')->count();

      $total_questions10 = $count_Q_10_E + $count_Q_10_B + $count_Q_10_M + $count_Q_10_NE;
      $e10 = $count_Q_10_E * 100 / $total_questions10;
      $b10 = $count_Q_10_B * 100 / $total_questions10;
      $m10 = $count_Q_10_M * 100 / $total_questions10;
      $ne10 = $count_Q_10_NE * 100 / $total_questions10;
      $q_10 = array('e'=> $this->gRV($e10), 'b' => $this->gRV($b10), 'm' => $this->gRV($m10), 'ne' => $this->gRV($ne10));

      $count_Q_11_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_11')->where('participacion.Q_11','E')->count();
      $count_Q_11_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_11')->where('participacion.Q_11','B')->count();
      $count_Q_11_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_11')->where('participacion.Q_11','M')->count();
      $count_Q_11_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_11')->where('participacion.Q_11','NE')->count();

      $total_questions11 = $count_Q_11_E + $count_Q_11_B + $count_Q_11_M + $count_Q_11_NE;
      $e11 = $count_Q_11_E * 100 / $total_questions11;
      $b11 = $count_Q_11_B * 100 / $total_questions11;
      $m11 = $count_Q_11_M * 100 / $total_questions11;
      $ne11 = $count_Q_11_NE * 100 / $total_questions11;
      $q_11 = array('e'=> $this->gRV($e11), 'b' => $this->gRV($b11), 'm' => $this->gRV($m11), 'ne' => $this->gRV($ne11));

      $count_Q_12_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_12')->where('participacion.Q_12','E')->count();
      $count_Q_12_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_12')->where('participacion.Q_12','B')->count();
      $count_Q_12_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_12')->where('participacion.Q_12','M')->count();
      $count_Q_12_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_12')->where('participacion.Q_12','NE')->count();

      $total_questions12 = $count_Q_12_E + $count_Q_12_B + $count_Q_12_M + $count_Q_12_NE;
      $e12 = $count_Q_12_E * 100 / $total_questions12;
      $b12 = $count_Q_12_B * 100 / $total_questions12;
      $m12 = $count_Q_12_M * 100 / $total_questions12;
      $ne12 = $count_Q_12_NE * 100 / $total_questions12;
      $q_12 = array('e'=> $this->gRV($e12), 'b' => $this->gRV($b12), 'm' => $this->gRV($m12), 'ne' => $this->gRV($ne12));

      $count_Q_13_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_13')->where('participacion.Q_13','E')->count();
      $count_Q_13_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_13')->where('participacion.Q_13','B')->count();
      $count_Q_13_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_13')->where('participacion.Q_13','M')->count();
      $count_Q_13_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_13')->where('participacion.Q_13','NE')->count();

      $total_questions13 = $count_Q_13_E + $count_Q_13_B + $count_Q_13_M + $count_Q_13_NE;
      $e13 = $count_Q_13_E * 100 / $total_questions13;
      $b13 = $count_Q_13_B * 100 / $total_questions13;
      $m13 = $count_Q_13_M * 100 / $total_questions13;
      $ne13 = $count_Q_13_NE * 100 / $total_questions13;
      $q_13 = array('e'=> $this->gRV($e13), 'b' => $this->gRV($b13), 'm' => $this->gRV($m13), 'ne' => $this->gRV($ne13));

      $count_Q_14_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_14')->where('participacion.Q_14','E')->count();
      $count_Q_14_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_14')->where('participacion.Q_14','B')->count();
      $count_Q_14_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_14')->where('participacion.Q_14','M')->count();
      $count_Q_14_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_14')->where('participacion.Q_14','NE')->count();

      $total_questions14 = $count_Q_14_E + $count_Q_14_B + $count_Q_14_M + $count_Q_14_NE;
      $e14 = $count_Q_14_E * 100 / $total_questions14;
      $b14 = $count_Q_14_B * 100 / $total_questions14;
      $m14 = $count_Q_14_M * 100 / $total_questions14;
      $ne14 = $count_Q_14_NE * 100 / $total_questions14;
      $q_14 = array('e'=> $this->gRV($e14), 'b' => $this->gRV($b14), 'm' => $this->gRV($m14), 'ne' => $this->gRV($ne14));

      $count_Q_15_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_15')->where('participacion.Q_15','E')->count();
      $count_Q_15_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_15')->where('participacion.Q_15','B')->count();
      $count_Q_15_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_15')->where('participacion.Q_15','M')->count();
      $count_Q_15_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_15')->where('participacion.Q_15','NE')->count();

      $total_questions15 = $count_Q_15_E + $count_Q_15_B + $count_Q_15_M + $count_Q_15_NE;
      $e15 = $count_Q_15_E * 100 / $total_questions15;
      $b15 = $count_Q_15_B * 100 / $total_questions15;
      $m15 = $count_Q_15_M * 100 / $total_questions15;
      $ne15 = $count_Q_15_NE * 100 / $total_questions15;
      $q_15 = array('e'=> $this->gRV($e15), 'b' => $this->gRV($b15), 'm' => $this->gRV($m15), 'ne' => $this->gRV($ne15));

      $count_Q_16_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_16')->where('participacion.Q_16','E')->count();
      $count_Q_16_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_16')->where('participacion.Q_16','B')->count();
      $count_Q_16_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_16')->where('participacion.Q_16','M')->count();
      $count_Q_16_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_16')->where('participacion.Q_16','NE')->count();

      $total_questions16 = $count_Q_16_E + $count_Q_16_B + $count_Q_16_M + $count_Q_16_NE;
      $e16 = $count_Q_16_E * 100 / $total_questions16;
      $b16 = $count_Q_16_B * 100 / $total_questions16;
      $m16 = $count_Q_16_M * 100 / $total_questions16;
      $ne16 = $count_Q_16_NE * 100 / $total_questions16;
      $q_16 = array('e'=> $this->gRV($e16), 'b' => $this->gRV($b16), 'm' => $this->gRV($m16), 'ne' => $this->gRV($ne16));

      $count_Q_17_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_17')->where('participacion.Q_17','E')->count();
      $count_Q_17_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_17')->where('participacion.Q_17','B')->count();
      $count_Q_17_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_17')->where('participacion.Q_17','M')->count();
      $count_Q_17_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_17')->where('participacion.Q_17','NE')->count();

      $total_questions17 = $count_Q_17_E + $count_Q_17_B + $count_Q_17_M + $count_Q_17_NE;
      $e17 = $count_Q_17_E * 100 / $total_questions17;
      $b17 = $count_Q_17_B * 100 / $total_questions17;
      $m17 = $count_Q_17_M * 100 / $total_questions17;
      $ne17 = $count_Q_17_NE * 100 / $total_questions17;
      $q_17 = array('e'=> $this->gRV($e17), 'b' => $this->gRV($b17), 'm' => $this->gRV($m17), 'ne' => $this->gRV($ne17));

      $count_Q_18_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_18')->where('participacion.Q_18','E')->count();
      $count_Q_18_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_18')->where('participacion.Q_18','B')->count();
      $count_Q_18_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_18')->where('participacion.Q_18','M')->count();
      $count_Q_18_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_18')->where('participacion.Q_18','NE')->count();

      $total_questions18 = $count_Q_18_E + $count_Q_18_B + $count_Q_18_M + $count_Q_18_NE;
      $e18 = $count_Q_18_E * 100 / $total_questions18;
      $b18 = $count_Q_18_B * 100 / $total_questions18;
      $m18 = $count_Q_18_M * 100 / $total_questions18;
      $ne18 = $count_Q_18_NE * 100 / $total_questions18;
      $q_18 = array('e'=> $this->gRV($e18), 'b' => $this->gRV($b18), 'm' => $this->gRV($m18), 'ne' => $this->gRV($ne18));

      $count_Q_19_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_19')->where('participacion.Q_19','E')->count();
      $count_Q_19_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_19')->where('participacion.Q_19','B')->count();
      $count_Q_19_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_19')->where('participacion.Q_19','M')->count();
      $count_Q_19_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_19')->where('participacion.Q_19','NE')->count();

      $total_questions19 = $count_Q_19_E + $count_Q_19_B + $count_Q_19_M + $count_Q_19_NE;
      $e19 = $count_Q_19_E * 100 / $total_questions19;
      $b19 = $count_Q_19_B * 100 / $total_questions19;
      $m19 = $count_Q_19_M * 100 / $total_questions19;
      $ne19 = $count_Q_19_NE * 100 / $total_questions19;
      $q_19 = array('e'=> $this->gRV($e19), 'b' => $this->gRV($b19), 'm' => $this->gRV($m19), 'ne' => $this->gRV($ne19));

      $count_Q_20_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_20')->where('participacion.Q_20','E')->count();
      $count_Q_20_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_20')->where('participacion.Q_20','B')->count();
      $count_Q_20_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_20')->where('participacion.Q_20','M')->count();
      $count_Q_20_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_20')->where('participacion.Q_20','NE')->count();

      $total_questions20 = $count_Q_20_E + $count_Q_20_B + $count_Q_20_M + $count_Q_20_NE;
      $e20 = $count_Q_20_E * 100 / $total_questions20;
      $b20 = $count_Q_20_B * 100 / $total_questions20;
      $m20 = $count_Q_20_M * 100 / $total_questions20;
      $ne20 = $count_Q_20_NE * 100 / $total_questions20;
      $q_20 = array('e'=> $this->gRV($e20), 'b' => $this->gRV($b20), 'm' => $this->gRV($m20), 'ne' => $this->gRV($ne20));

      $count_Q_21_E  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_21')->where('participacion.Q_21','E')->count();
      $count_Q_21_B  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_21')->where('participacion.Q_21','B')->count();
      $count_Q_21_M  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_21')->where('participacion.Q_21','M')->count();
      $count_Q_21_NE  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.Q_21')->where('participacion.Q_21','NE')->count();

      $total_questions21 = $count_Q_21_E + $count_Q_21_B + $count_Q_21_M + $count_Q_21_NE;
      $e21 = $count_Q_21_E * 100 / $total_questions21;
      $b21 = $count_Q_21_B * 100 / $total_questions21;
      $m21 = $count_Q_21_M * 100 / $total_questions21;
      $ne21 = $count_Q_21_NE * 100 / $total_questions21;
      $q_21 = array('e'=> $this->gRV($e21), 'b' => $this->gRV($b21), 'm' => $this->gRV($m21), 'ne' => $this->gRV($ne21));

      //Consulta General Por calificacion
      $c_excelent = $e01 + $e02 + $e04 + $e05 + $e06 + $e07 + $e08 + $e09 + $e10 + $e11 + $e12 + $e13 + $e14 + $e15 + $e16 + $e17 + $e18 + $e19 + $e20
      + $e21;

      $c_bueno = $b01 + $b02 + $b04 + $b05 + $b06 + $b07 + $b08 + $b09 + $b10 + $b11 + $b12 + $b13 + $b14 + $b15 + $b16 + $b17 + $b18 + $b19 + $b20
      + $b21;

      $c_malo = $m01 + $m02 + $m04 + $m05 + $m06 + $m07 + $m08 + $m09 + $m10 + $m11 + $m12 + $m13 + $m14 + $m15 + $m16 + $m17 + $m18 + $m19 + $m20
      + $m21;

      $c_nexiste = $ne01 + $ne02 + $ne04 + $ne05 + $ne06 + $ne07 + $ne08 + $ne09 + $ne10 + $ne11 + $ne12 + $ne13 + $ne14 + $ne15 + $ne16 + $ne17 + $ne18 + $ne19 + $ne20
      + $ne21;

      $excelente = round($c_excelent * 1 / 21);
      $bueno = round($c_bueno * 1 / 21);
      $malo = round($c_malo * 1 / 21);
      $no_existe = round($c_nexiste * 1 / 21);
      $data = array('e'=> $excelente, 'b' => $bueno, 'm' => $malo, 'ne' => $no_existe);


      $general = array(
      'data' =>$data,
      'q_01'=>$q_01,
      'q_02'=>$q_02,
      'q_03'=>$q_03,
      'q_04'=>$q_04,
      'q_05'=>$q_05,
      'q_06'=>$q_06,
      'q_07'=>$q_07,
      'q_08'=>$q_08,
      'q_09'=>$q_09,
      'q_10'=>$q_10,
      'q_11'=>$q_11,
      'q_12'=>$q_12,
      'q_13'=>$q_13,
      'q_14'=>$q_14,
      'q_15'=>$q_15,
      'q_16'=>$q_16,
      'q_17'=>$q_17,
      'q_18'=>$q_18,
      'q_19'=>$q_19,
      'q_20'=>$q_20,
      'q_21'=>$q_21);


      return $general;
    }

    public function obtenerMapaAmbiental(){
      $data  = \DB::table('participaciones_recoleccion as participacion')
                ->select('participacion.ubicacion_latitud_ambiental as latitud','participacion.ubicacion_longitud_ambiental as longitud','participacion.ubicacion_solucion_ambiental as municipio')
                ->get();
      return response()->json($data);
    }

    public function obtenerMapaEconomico(){
      $data  = \DB::table('participaciones_recoleccion as participacion')
                ->select('participacion.ubicacion_latitud_economico as latitud','participacion.ubicacion_longitud_economico as longitud')
                ->get();
      return $data;
    }

    public function obtenerMapaSocial(){
      $data  = \DB::table('participaciones_recoleccion as participacion')
                ->select('participacion.ubicacion_latitud_social as latitud','participacion.ubicacion_longitud_social as longitud')
                ->get();
      return $data;
    }

    public function obtenerMapaGeneral(){

      $data  = \DB::table('participaciones_recoleccion as participacion')
                ->select('participacion.ubicacion_latitud_social as latitud','participacion.ubicacion_longitud_social as longitud')
                ->get();

      /*$dataEconomico  = \DB::table('participaciones_recoleccion as participacion')
                ->select('participacion.ubicacion_latitud_economico as latitud','participacion.ubicacion_latitud_economico as longitud')
                ->get();

      array_push($data, $dataEconomico);

      $dataAmbiental  = \DB::table('participaciones_recoleccion as participacion')
                ->select('participacion.ubicacion_latitud_ambiental as latitud','participacion.ubicacion_longitud_ambiental as longitud','participacion.ubicacion_solucion_ambiental as municipio')
                ->get();
      array_push($data, $dataAmbiental);*/

      return $data;

    }

    public function obtenerSectorPertenece(){
      //Query Ocupacion
      $c_ninguno = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Ninguno')->count();
      $c_transporte_vias = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Transporte y vias')->count();
      $c_gremios = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Gremios')->count();
      $c_medio_ambiente = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();
      $c_infraestructura = \DB::table('participaciones_recoleccion as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Infraestructura y servicios publicos')->count();

      $sector_total = $c_ninguno+$c_transporte_vias+$c_gremios+$c_medio_ambiente+$c_infraestructura;

      $ninguno = $c_ninguno * 100 / $sector_total;
      $transporte_vias = $c_transporte_vias * 100 / $sector_total;
      $gremios = $c_gremios * 100 / $sector_total;
      $medio_ambiente = $c_medio_ambiente * 100 / $sector_total;
      $infraestructura = $c_infraestructura * 100 / $sector_total;

      $data = array('ninguno'=> $ninguno, 'transporte_vias' => $transporte_vias,'gremios'=> $gremios, 'medio_ambiente' => $c_medio_ambiente,'infraestructura'=> $c_infraestructura);

      return $data;
    }

    public function obtenerEdades($option){

      if($option == 'general'){
        $c_01 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [18, 25])
                      ->count();
        $c_02 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [25, 35])
                      ->count();
        $c_03 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [35, 45])
                      ->count();
        $c_04 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [45, 55])
                      ->count();
        $c_05 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [55, 68])
                      ->count();
        $c_06 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [68, 77])
                      ->count();
      }else{
        $c_01 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [18, 25])
                      ->where('municipio_residencia',$option)
                      ->count();
        $c_02 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [25, 35])
                      ->where('municipio_residencia',$option)
                      ->count();
        $c_03 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [35, 45])
                      ->where('municipio_residencia',$option)
                      ->count();
        $c_04 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [45, 55])
                      ->where('municipio_residencia',$option)
                      ->count();
        $c_05 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [55, 68])
                      ->where('municipio_residencia',$option)
                      ->count();
        $c_06 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [68, 77])
                      ->where('municipio_residencia',$option)
                      ->count();
      }



      $total_edades = $c_01 + $c_02 + $c_03 + $c_04 + $c_05 + $c_06;
      $option_01 = $c_01 * 100 / $total_edades;
      $option_02 = $c_02 * 100 / $total_edades;
      $option_03 = $c_03 * 100 / $total_edades;
      $option_04 = $c_04 * 100 / $total_edades;
      $option_05 = $c_05 * 100 / $total_edades;
      $option_06 = $c_06 * 100 / $total_edades;

      $data = array('opt01'=> $option_01, 'opt02' => $option_02,'opt03'=> $option_03, 'opt04' => $option_04,'opt05'=> $option_05,'opt06'=> $option_06);


      return $data;
    }

    public function obtenerSituacionDesplazamiento($option){
      //Query Genero
      if($option == 'general'){
      $c_desplazado = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.situacion_dezplazamiento_conflicto',1)->count();
      $c_nodesplazado  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.situacion_dezplazamiento_conflicto',0)->count();
    }else{
      $c_desplazado = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.situacion_dezplazamiento_conflicto',1)->where('municipio_residencia',$option)->count();
      $c_nodesplazado  = \DB::table('participaciones_recoleccion as participacion')->select('participacion.id')->where('participacion.situacion_dezplazamiento_conflicto',0)->where('municipio_residencia',$option)->count();

    }
      $situacion_desplazado = $c_desplazado + $c_nodesplazado;

      $desplazado = $c_desplazado * 100 / $situacion_desplazado;
      $nodesplazado = 100 - $desplazado;

      $data = array('desplazado'=> $desplazado, 'no_desplazado' => $nodesplazado);

      return $data;
    }

    public function obtenerTiempoResidencia(){
      $c_01 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tiempo_residencia')
                    ->whereBetween('participacion.tiempo_residencia', [1, 10])
                    ->count();
      $c_02 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tiempo_residencia')
                    ->whereBetween('participacion.tiempo_residencia', [11, 20])
                    ->count();
      $c_03 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tiempo_residencia')
                    ->whereBetween('participacion.tiempo_residencia', [21, 30])
                    ->count();
      $c_04 = \DB::table('participaciones_recoleccion as participacion')->select('participacion.tiempo_residencia')
                    ->whereBetween('participacion.tiempo_residencia', [30, 100])
                    ->count();

      $total_edades = $c_01 + $c_02 + $c_03 + $c_04;
      $option_01 = $c_01 * 100 / $total_edades;
      $option_02 = $c_02 * 100 / $total_edades;
      $option_03 = $c_03 * 100 / $total_edades;
      $option_04 = $c_04 * 100 / $total_edades;


      $data = array('opt01'=> $option_01, 'opt02' => $option_02,'opt03'=> $option_03, 'opt04' => $option_04);


      return $data;
    }

}
