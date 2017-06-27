<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    //
    public function gRV($value){
      $data = round($value);
      return $data;
    }
    public function obtenerGenero($option){
      if($option == "general"){
        $h_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',1)->count();
        $m_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',2)->count();
        $o_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',3)->count();
      }else{
        $h_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',1)->where('participacion.municipio_residencia',$option)->count();
        $m_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',2)->where('participacion.municipio_residencia',$option)->count();
        $o_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',3)->where('participacion.municipio_residencia',$option)->count();
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

      if($option == "general"){
        $o_estudiante = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','estudiante')->count();
        $o_empleado = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','empleado')->count();
        $o_independiente = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','independiente')->count();
        $o_desempleado= \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','desempleado')->count();
        $o_hogar = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','hogar')->count();

      }else{
        $o_estudiante = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.municipio_residencia',$option)->where('participacion.ocupacion','estudiante')->count();
        $o_empleado = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.municipio_residencia',$option)->where('participacion.ocupacion','empleado')->count();
        $o_independiente = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.municipio_residencia',$option)->where('participacion.ocupacion','independiente')->count();
        $o_desempleado= \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.municipio_residencia',$option)->where('participacion.ocupacion','desempleado')->count();
        $o_hogar = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.municipio_residencia',$option)->where('participacion.ocupacion','hogar')->count();

      }

      $ocupacion_total = $o_estudiante+$o_empleado+$o_independiente+$o_desempleado+$o_hogar;

      if($ocupacion_total == 0){
        $estudiante = 0;
        $empleado = 0;
        $independiente = 0;
        $desempleado = 0;
        $hogar = 0;

      }else{
        $estudiante = $o_estudiante * 100 / $ocupacion_total;
        $empleado = $o_empleado * 100 / $ocupacion_total;
        $independiente = $o_independiente * 100 / $ocupacion_total;
        $desempleado = $o_desempleado * 100 / $ocupacion_total;
        $hogar = $o_hogar * 100 / $ocupacion_total;

      }




      $datos_ocupacion = array('estudiante'=> $this->gRV($estudiante), 'empleado' => $this->gRV($empleado),'independiente'=> $this->gRV($independiente),
       'desempleado' => $this->gRV($desempleado),'hogar'=> $this->gRV($hogar));

      return $datos_ocupacion;
    }

    public function obtenerDiscapacidad($option){
      //Query discapacidad
      if($option == "general"){
        $d_si = \DB::table('participaciones as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',1)->count();
        $d_no = \DB::table('participaciones as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',0)->count();
      }else{
        $d_si = \DB::table('participaciones as participacion')->select('participacion.discapacidad')->where('participacion.municipio_residencia',$option)->where('participacion.discapacidad',1)->count();
        $d_no = \DB::table('participaciones as participacion')->select('participacion.discapacidad')->where('participacion.municipio_residencia',$option)->where('participacion.discapacidad',0)->count();
      }
      $discapacidad_total = $d_si + $d_no;
      if($discapacidad_total == 0){
        $discapacidad_si = 0;
        $discapacidad_no = 0;
      }else{
        $discapacidad_si = $d_si * 100 / $discapacidad_total;
        $discapacidad_no = $d_no * 100 / $discapacidad_total;
      }
      $datos_discapacidad = array('si'=> $this->gRV($discapacidad_si), 'no' => $this->gRV($discapacidad_no));
      return $datos_discapacidad;
    }

    public function obtenerNivelEducativo($option){
      //Query Nivel Educativo
      if($option == "general"){
        $n_e_primaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','primaria')->count();
        $n_e_secundaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','secundaria')->count();
        $n_e_tecnica = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','tecnica')->count();
        $n_e_universitaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','universitaria')->count();
        $n_e_ninguna = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','ninguna')->count();

      }else{
        $n_e_primaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.municipio_residencia',$option)->where('participacion.nivel_educativo','primaria')->count();
        $n_e_secundaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.municipio_residencia',$option)->where('participacion.nivel_educativo','secundaria')->count();
        $n_e_tecnica = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.municipio_residencia',$option)->where('participacion.nivel_educativo','tecnica')->count();
        $n_e_universitaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.municipio_residencia',$option)->where('participacion.nivel_educativo','universitaria')->count();
        $n_e_ninguna = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.municipio_residencia',$option)->where('participacion.nivel_educativo','ninguna')->count();

      }

      $nivel_educativo_total = $n_e_primaria + $n_e_secundaria + $n_e_tecnica + $n_e_universitaria + $n_e_ninguna;
      if($nivel_educativo_total == 0){
        $primaria = 0;
        $secundaria = 0;
        $tecnica = 0;
        $universitaria = 0;
        $ninguna = 0;
      }else{
        $primaria = $n_e_primaria * 100 / $nivel_educativo_total;
        $secundaria = $n_e_secundaria * 100 / $nivel_educativo_total;
        $tecnica = $n_e_tecnica * 100 / $nivel_educativo_total;
        $universitaria = $n_e_universitaria * 100 / $nivel_educativo_total;
        $ninguna = $n_e_ninguna * 100 / $nivel_educativo_total;
      }



      $datos_nivel_educativo = array('primaria'=> $this->gRV($primaria), 'secundaria' => $this->gRV($secundaria),
      'tecnica' => $this->gRV($tecnica),'universitaria' => $this->gRV($universitaria),'ninguna' => $this->gRV($ninguna));

      return $datos_nivel_educativo;
    }

    public function obtenerRegimenSalud($option){

      if($option == "general"){
        $count_subsidiado  = \DB::table('participaciones as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','subsidiado')->count();
        $count_contributivo  = \DB::table('participaciones as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','contributivo')->count();
      }else{
        $count_subsidiado  = \DB::table('participaciones as participacion')->select('participacion.regimen_salud')->where('participacion.municipio_residencia',$option)->where('participacion.regimen_salud','subsidiado')->count();
        $count_contributivo  = \DB::table('participaciones as participacion')->select('participacion.regimen_salud')->where('participacion.municipio_residencia',$option)->where('participacion.regimen_salud','contributivo')->count();
      }

      $regimen_salud_total = $count_subsidiado + $count_contributivo;
      if($regimen_salud_total == 0){
        $subsidiado = 0;
        $contributivo = 0;
      }else{
        $subsidiado = $count_subsidiado * 100 / $regimen_salud_total;
        $contributivo = $count_contributivo * 100 / $regimen_salud_total;
      }

      $data = array('subsidiado'=> $this->gRV($subsidiado), 'contributivo' => $this->gRV($contributivo));

      return $data;
    }

    public function obtenerSector($option){

      if($option == "general"){
        $count_rural  = \DB::table('participaciones as participacion')->select('participacion.sector')->where('participacion.sector',1)->count();
        $count_urbano  = \DB::table('participaciones as participacion')->select('participacion.sector')->where('participacion.sector',2)->count();
      }else{
        $count_rural  = \DB::table('participaciones as participacion')->select('participacion.sector')->where('participacion.municipio_residencia',$option)->where('participacion.sector',1)->count();
        $count_urbano  = \DB::table('participaciones as participacion')->select('participacion.sector')->where('participacion.municipio_residencia',$option)->where('participacion.sector',2)->count();
      }
      $Sector_total = $count_rural + $count_urbano;
      if($Sector_total == 0){
        $rural = 0;
        $urbano = 0;
      }else{
        $rural = $count_rural * 100 / $Sector_total;
        $urbano = $count_urbano * 100 / $Sector_total;
      }

      $datos_sector = array('urbano'=> $this->gRV($urbano), 'rural' => $this->gRV($rural));

      return $datos_sector;
    }

    public function obtenerSalidoDepartamento($option){

      if($option == "general"){
        $count_si  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_departamento')->where('participacion.ha_salido_departamento',1)->count();
        $count_no  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_departamento')->where('participacion.ha_salido_departamento',0)->count();
      }else{
        $count_si  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_departamento')->where('participacion.municipio_residencia',$option)->where('participacion.ha_salido_departamento',1)->count();
        $count_no  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_departamento')->where('participacion.municipio_residencia',$option)->where('participacion.ha_salido_departamento',0)->count();
      }
      $total_salido = $count_si + $count_no;
      if($total_salido == 0){
        $sisalido = 0;
        $nosalido = 0;
      }else{
        $sisalido = $count_si * 100 / $total_salido;
        $nosalido = $count_no * 100 / $total_salido;
      }
      $datos_salidos = array('sisalido'=> $this->gRV($sisalido), 'nosalido' => $this->gRV($nosalido));

      return $datos_salidos;
    }

    public function obtenerSalidoMunicipio($option){
      if($option == "general"){
        $count_si_m  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_municipio')->where('participacion.ha_salido_municipio',1)->count();
        $count_no_m  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_municipio')->where('participacion.ha_salido_municipio',0)->count();
      }else{
        $count_si_m  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_municipio')->where('participacion.municipio_residencia',$option)->where('participacion.ha_salido_municipio',1)->count();
        $count_no_m  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_municipio')->where('participacion.municipio_residencia',$option)->where('participacion.ha_salido_municipio',0)->count();
      }
      $total_salido = $count_si_m + $count_no_m;
      if($total_salido == 0){
        $sisalidom = 0;
        $nosalidom = 0;
      }else{
        $sisalidom = $count_si_m * 100 / $total_salido;
        $nosalidom = $count_no_m * 100 / $total_salido;
      }

      $datos_salidos_m = array('sisalidom'=> $this->gRV($sisalidom), 'nosalidom' => $this->gRV($nosalidom));

      return $datos_salidos_m;
    }

    public function obtenerActores($option){

      if($option == "general"){
        $count_ninguno  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Ninguno')->count();
        $count_transporte  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Transporte y vías')->count();
        $count_infraestructura  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Infraestructura y servicios públicos')->count();
        $count_gremios  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Gremios')->count();
        $count_ambiente  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();

      }else{
        $count_ninguno  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Ninguno')->count();
        $count_transporte  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Transporte y vías')->count();
        $count_infraestructura  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Infraestructura y servicios públicos')->count();
        $count_gremios  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Gremios')->count();
        $count_ambiente  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();
      }

      $total_actores = $count_ninguno + $count_transporte + $count_infraestructura + $count_gremios + $count_ambiente;
      if($total_actores == 0){
        $ninguno = 0;
        $transporte = 0;
        $infraestructura = 0;
        $gremios = 0;
        $ambiente = 0;
      }else{
        $ninguno = $count_ninguno * 100 / $total_actores;
        $transporte = $count_transporte * 100 / $total_actores;
        $infraestructura = $count_infraestructura * 100 / $total_actores;
        $gremios = $count_gremios * 100 / $total_actores;
        $ambiente = $count_ambiente * 100 / $total_actores;
      }


      $datos_actores = array('ninguno'=> $this->gRV($ninguno), 'transporte' => $this->gRV($transporte), 'infraestructura' => $this->gRV($infraestructura),
       'gremios' => $this->gRV($gremios), 'ambiente' => $this->gRV($ambiente));

      return $datos_actores;
    }

    public function obtenerCondicionesFisicas($option){

      if($option == "general"){
        $count_material  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','material')->count();
        $count_palafitica  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','palafitica')->count();
        $count_bareque  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','bareque')->count();
      }else{
        $count_material  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.municipio_residencia',$option)->where('participacion.condiciones_fisicas','material')->count();
        $count_palafitica  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.municipio_residencia',$option)->where('participacion.condiciones_fisicas','palafitica')->count();
        $count_bareque  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.municipio_residencia',$option)->where('participacion.condiciones_fisicas','bareque')->count();
      }

      $total_condiciones = $count_material + $count_palafitica + $count_bareque;
      if($total_condiciones == 0){
        $material = 0;
        $palafitica = 0;
        $bareque = 0;
      }else{
        $material = $count_material * 100 / $total_condiciones;
        $palafitica = $count_palafitica * 100 / $total_condiciones;
        $bareque = $count_bareque * 100 / $total_condiciones;
      }
      $datos_condiciones = array('material'=> $this->gRV($material), 'palafitica' => $this->gRV($palafitica), 'bareque' => $this->gRV($bareque));

      return $datos_condiciones;
    }

    public function obtenerViviendaEs($option){

      if($option == "general"){
        $count_familiar  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','familiar')->count();
        $count_arrendada  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','arrendada')->count();
        $count_propia  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','propia')->count();

      }else{
        $count_familiar  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_es','familiar')->count();
        $count_arrendada  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_es','arrendada')->count();
        $count_propia  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_es','propia')->count();
      }

      $total_vivienda = $count_familiar + $count_arrendada + $count_propia;
      if($total_vivienda == 0){
        $familiar = 0;
        $arrendada = 0;
        $propia = 0;
      }else{
        $familiar = $count_familiar * 100 / $total_vivienda;
        $arrendada = $count_arrendada * 100 / $total_vivienda;
        $propia = $count_propia * 100 / $total_vivienda;
      }
      $datos_viviendas = array('familiar'=> $this->gRV($familiar), 'arrendada' => $this->gRV($arrendada), 'propia' => $this->gRV($propia));

      return $datos_viviendas;
    }

    public function obtenerServicios($option){


      if($option == "general"){
          $count_agua_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.vivienda_cuenta_agua_potable','si')->count();
          $count_agua_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.vivienda_cuenta_agua_potable','no')->count();
          $count_alcantarillado_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.vivienda_cuenta_alcantarillado','si')->count();
          $count_alcantarillado_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.vivienda_cuenta_alcantarillado','no')->count();
          $count_energia_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.vivienda_cuenta_energia','si')->count();
          $count_energia_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.vivienda_cuenta_energia','no')->count();
          $count_gas_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.vivienda_cuenta_gas','si')->count();
          $count_gas_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.vivienda_cuenta_gas','no')->count();
          $count_recoleccion_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->where('participacion.vivienda_cuenta_recoleccion_basura','si')->count();
          $count_recoleccion_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->where('participacion.vivienda_cuenta_recoleccion_basura','no')->count();
      }else{
          $count_agua_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_agua_potable','si')->count();
          $count_agua_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_agua_potable')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_agua_potable','no')->count();
          $count_alcantarillado_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_alcantarillado','si')->count();
          $count_alcantarillado_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_alcantarillado')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_alcantarillado','no')->count();
          $count_energia_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_energia','si')->count();
          $count_energia_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_energia')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_energia','no')->count();
          $count_gas_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_gas','si')->count();
          $count_gas_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_gas')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_gas','no')->count();
          $count_recoleccion_si  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_recoleccion_basura','si')->count();
          $count_recoleccion_no  = \DB::table('participaciones as participacion')->select('participacion.vivienda_cuenta_recoleccion_basura')->where('participacion.municipio_residencia',$option)->where('participacion.vivienda_cuenta_recoleccion_basura','no')->count();
      }



      $total_agua = $count_agua_si + $count_agua_no;
      if($total_agua == 0){
        $agua_si = 0;
        $agua_no = 0;
      }else{
        $agua_si = $count_agua_si * 100 / $total_agua;
        $agua_no = $count_agua_no * 100 / $total_agua;
      }

      $total_alcantarillado = $count_alcantarillado_si + $count_alcantarillado_no;
      if($total_alcantarillado == 0){
        $alcantarillado_si = 0;
        $alcantarillado_no = 0;
      }else{
        $alcantarillado_si = $count_alcantarillado_si * 100 / $total_alcantarillado;
        $alcantarillado_no = $count_alcantarillado_no * 100 / $total_alcantarillado;
      }

      $total_energia = $count_energia_si + $count_energia_no;
      if($total_energia == 0){
        $energia_si = 0;
        $energia_no = 0;
      }else{
        $energia_si = $count_energia_si * 100 / $total_energia;
        $energia_no = $count_energia_no * 100 / $total_energia;
      }


      $total_gas = $count_gas_si + $count_gas_no;
      if($total_gas == 0){
        $gas_si = 0;
        $gas_no = 0;
      }else{
        $gas_si = $count_gas_si * 100 / $total_gas;
        $gas_no = $count_gas_no * 100 / $total_gas;
      }


      $total_recoleccion = $count_recoleccion_si + $count_recoleccion_no;
      if($total_recoleccion == 0){
        $recoleccion_si = 0;
        $recoleccion_no = 0;
      }else{
        $recoleccion_si = $count_recoleccion_si * 100 / $total_recoleccion;
        $recoleccion_no = $count_recoleccion_no * 100 / $total_recoleccion;
      }


      $datos_servicios = array('agua_si'=> $this->gRV($agua_si), 'agua_no' => $this->gRV($agua_no), 'alcantarillado_si' => $this->gRV($alcantarillado_si),
       'alcantarillado_no' => $this->gRV($alcantarillado_no), 'energia_si' => $this->gRV($energia_si), 'energia_no' => $this->gRV($energia_no),
        'gas_si' =>$this->gRV($gas_si), 'gas_no' =>$this->gRV($gas_no), 'recoleccion_si' =>$this->gRV($recoleccion_si), 'recoleccion_no' =>$this->gRV($recoleccion_no));

      return $datos_servicios;
    }

    //Falta Revisar Detalladamente
    public function obtenerSuelo($option){
      $count_ganaderia  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','ganaderia')->count();
      $count_vivienda  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','vivienda')->count();
      $count_comercio  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','comercio')->count();
      $count_mineria  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','mineria')->count();
      $count_conservacion  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','conservacion')->count();
      $count_industria  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','industria')->count();
      $count_proteccion  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','proteccion')->count();
      $count_vias  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','vias')->count();
      $count_agricultura  = \DB::table('participaciones as participacion')->select('participacion.mas_suelo_para')->where('participacion.mas_suelo_para','agricultura')->count();

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

    //Revisar Municipios que estan cargando desee el select
    public function obtenerMunicipios(){
      //$count_otro  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','otro')->where('participacion.ubicacion_solucion_social','otro')->where('participacion.ubicacion_solucion_economico','otro')->count();
      $count_nechi  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','nechi')->count();
      $count_achi  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','achi')->count();
      $count_magangue  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','magangue')->count();
      $count_san_jacinto_cauca  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','san-jacinto-cauca')->count();
      $count_ayapel  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','ayapel')->count();
      $count_caimito  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','caimito')->count();
      $count_guaranda  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','guaranda')->count();
      $count_majagual  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','majagual')->count();
      $count_san_benito_abad  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','san-benito-abad')->count();
      $count_san_marcos  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','san-marcos')->count();
      $count_sucre  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia','sucre')->count();


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
        'nechi'=> $this->gRV($nechi),
        'achi' => $this->gRV($achi),
        'magangue' => $this->gRV($magangue),
        'san_jacinto_cauca' => $this->gRV($san_jacinto_cauca),
        'ayapel' => $this->gRV($ayapel),
        'caimito' => $this->gRV($caimito),
        'guaranda' => $this->gRV($guaranda),
        'majagual' => $this->gRV($majagual),
        'san_benito_abad' => $this->gRV($san_benito_abad),
        'san_marcos' => $this->gRV($san_marcos),
        'sucre' => $this->gRV($sucre)
      );

      return $datos_municipios;
    }

    public function obtenerVariablesAmbientales($option){

      if($option == "general"){

        $c_count01  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',1)->count();
        $c_count02  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',2)->count();
        $c_count03  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',3)->count();
        $c_count04  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',4)->count();
        $c_count05  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',5)->count();
        $c_count06  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',6)->count();
        $c_count07  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',7)->count();
        $c_count08  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',8)->count();
        $c_count09  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',9)->count();
        $c_count10  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',10)->count();
        $c_count11  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',11)->count();
        $c_count12  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.tema_problematica_ambiental',12)->count();

      }else{

        $c_count01  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',1)->count();
        $c_count02  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',2)->count();
        $c_count03  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',3)->count();
        $c_count04  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',4)->count();
        $c_count05  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',5)->count();
        $c_count06  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',6)->count();
        $c_count07  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',7)->count();
        $c_count08  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',8)->count();
        $c_count09  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',9)->count();
        $c_count10  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',10)->count();
        $c_count11  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',11)->count();
        $c_count12  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_ambiental')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_ambiental',12)->count();

      }


      $variables_ambiental_total = $c_count01 + $c_count02 + $c_count03 + $c_count04 + $c_count05 + $c_count06 + $c_count06 + $c_count07 + $c_count08 + $c_count09 + $c_count10 + $c_count11 + $c_count12;
      if($variables_ambiental_total == 0){
        $v_01 = 0;
        $v_02 = 0;
        $v_03 = 0;
        $v_04 = 0;
        $v_05 = 0;
        $v_06 = 0;
        $v_07 = 0;
        $v_08 = 0;
        $v_09 = 0;
        $v_10 = 0;
        $v_11 = 0;
        $v_12 = 0;
      }else{
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
      }


      $data = array('01'=> $v_01, '02' => $v_02, '03' => $v_03, '04' => $v_04, '05' => $v_05, '06' => $v_06, '07' => $v_07, '08' => $v_08, '09' => $v_09, '10' => $v_10
                  , '11' => $v_11, '12' => $v_12);

      return $data;

    }

    public function obtenerVariablesSocial($option){

      if($option == "general"){
        $c_count13  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',13)->count();
        $c_count14  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',14)->count();
        $c_count15  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',15)->count();
        $c_count16  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',16)->count();
        $c_count17  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',17)->count();
        $c_count18  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',18)->count();
        $c_count19  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',19)->count();
        $c_count20  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',20)->count();
        $c_count21  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',21)->count();
        $c_count22  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',22)->count();
        $c_count23  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',23)->count();
        $c_count24  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',24)->count();
        $c_count25  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',25)->count();
        $c_count26  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',26)->count();
        $c_count27  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',27)->count();
        $c_count28  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',28)->count();
        $c_count29  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',29)->count();
        $c_count30  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',30)->count();
        $c_count31  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',31)->count();
        $c_count32  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',32)->count();
        $c_count33  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',33)->count();
        $c_count34  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.tema_problematica_social',34)->count();

      }else{
        $c_count13  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',13)->count();
        $c_count14  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',14)->count();
        $c_count15  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',15)->count();
        $c_count16  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',16)->count();
        $c_count17  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',17)->count();
        $c_count18  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',18)->count();
        $c_count19  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',19)->count();
        $c_count20  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',20)->count();
        $c_count21  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',21)->count();
        $c_count22  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',22)->count();
        $c_count23  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',23)->count();
        $c_count24  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',24)->count();
        $c_count25  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',25)->count();
        $c_count26  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',26)->count();
        $c_count27  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',27)->count();
        $c_count28  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',28)->count();
        $c_count29  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',29)->count();
        $c_count30  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',30)->count();
        $c_count31  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',31)->count();
        $c_count32  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',32)->count();
        $c_count33  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',33)->count();
        $c_count34  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_social')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_social',34)->count();

      }



      $variables_social_total = $c_count13 + $c_count14 + $c_count15 + $c_count16 + $c_count17 + $c_count18 + $c_count19 + $c_count20
                                 + $c_count21 + $c_count22 + $c_count23 + $c_count24 + $c_count25 + $c_count26 + $c_count27 + $c_count28
                                 + $c_count29 + $c_count30 + $c_count31 + $c_count32 + $c_count33 + $c_count34 ;

       if($variables_social_total == 0){
         $v_13 = 0;
         $v_14 = 0;
         $v_15 = 0;
         $v_16 = 0;
         $v_17 = 0;
         $v_18 = 0;
         $v_19 = 0;
         $v_20 = 0;
         $v_21 = 0;
         $v_22 = 0;
         $v_23 = 0;
         $v_24 = 0;
         $v_25 = 0;
         $v_26 = 0;
         $v_27 = 0;
         $v_28 = 0;
         $v_29 = 0;
         $v_30 = 0;
         $v_31 = 0;
         $v_32 = 0;
         $v_33 = 0;
         $v_34 = 0;

       }else{
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
       }


      $data = array('13'=> $v_13,'14'=> $v_14, '15' => $v_15, '16' => $v_16, '17' => $v_17, '18' => $v_18,
                    '19'=> $v_19, '20' => $v_20, '21' => $v_21, '22' => $v_22, '23' => $v_23,
                    '24' => $v_24, '25' => $v_25, '26' => $v_26, '27' => $v_27,'28' => $v_28,
                    '29' => $v_29, '30' => $v_30, '31' => $v_31, '32' => $v_32,'33'=> $v_33, '34' => $v_34);

      return $data;


    }

    public function obtenerVariablesEconomicas($option){

      if($option == "general"){
        $c_count35  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',35)->count();
        $c_count36  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',36)->count();
        $c_count37  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',37)->count();
        $c_count38  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',38)->count();
        $c_count39  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',39)->count();
        $c_count40  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',40)->count();
        $c_count41  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',41)->count();
        $c_count42  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',42)->count();
        $c_count43  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.tema_problematica_economico',43)->count();

      }else{
        $c_count35  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',35)->count();
        $c_count36  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',36)->count();
        $c_count37  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',37)->count();
        $c_count38  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',38)->count();
        $c_count39  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',39)->count();
        $c_count40  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',40)->count();
        $c_count41  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',41)->count();
        $c_count42  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',42)->count();
        $c_count43  = \DB::table('participaciones as participacion')->select('participacion.tema_problematica_economico')->where('participacion.municipio_residencia',$option)->where('participacion.tema_problematica_economico',43)->count();

      }



      $variables_economico_total = $c_count35 + $c_count36 + $c_count37 + $c_count38 + $c_count39 + $c_count40 + $c_count41 + $c_count42 + $c_count43;
      if($variables_economico_total == 0){
        $v_35 = 0;
        $v_36 = 0;
        $v_37 = 0;
        $v_38 = 0;
        $v_39 = 0;
        $v_40 = 0;
        $v_41 = 0;
        $v_42 = 0;
        $v_43 = 0;
      }else{
        $v_35 = $c_count35 * 100 / $variables_economico_total;
        $v_36 = $c_count36 * 100 / $variables_economico_total;
        $v_37 = $c_count37 * 100 / $variables_economico_total;
        $v_38 = $c_count38 * 100 / $variables_economico_total;
        $v_39 = $c_count39 * 100 / $variables_economico_total;
        $v_40 = $c_count40 * 100 / $variables_economico_total;
        $v_41 = $c_count41 * 100 / $variables_economico_total;
        $v_42 = $c_count42 * 100 / $variables_economico_total;
        $v_43 = $c_count43 * 100 / $variables_economico_total;

      }

      $data = array('35'=> $v_35, '36' => $v_36, '37' => $v_37, '38' => $v_38, '39' => $v_39, '40' => $v_40, '41' => $v_41, '42' => $v_42, '43' => $v_43);

      return $data;

    }

    public function obtenerCountMunicipiosAmbientales(){

      $c_achi  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','achi')->count();
      $c_ayapel  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','ayapel')->count();
      $c_caimito  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','caimito')->count();
      $c_guaranda  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','guaranda')->count();
      $c_magangue  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','magangue')->count();
      $c_majagual  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','majagual')->count();
      $c_nechi  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','nechi')->count();
      $c_san_benito_abad  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','san-benito-abad')->count();
      $c_san_jacinto_cauca  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','san-jacinto-cauca')->count();
      $c_san_marcos  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','san-marcos')->count();
      $c_sucre  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_ambiental','sucre')->count();


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

      $c_achi  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','achi')->count();
      $c_ayapel  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','ayapel')->count();
      $c_caimito  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','caimito')->count();
      $c_guaranda  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','guaranda')->count();
      $c_magangue  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','magangue')->count();
      $c_majagual  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','majagual')->count();
      $c_nechi  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','nechi')->count();
      $c_san_benito_abad  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','san-benito-abad')->count();
      $c_san_jacinto_cauca  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','san-jacinto-cauca')->count();
      $c_san_marcos  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','san-marcos')->count();
      $c_sucre  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_social','sucre')->count();


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

      $c_achi  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','achi')->count();
      $c_ayapel  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','ayapel')->count();
      $c_caimito  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','caimito')->count();
      $c_guaranda  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','guaranda')->count();
      $c_magangue  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','magangue')->count();
      $c_majagual  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','majagual')->count();
      $c_nechi  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','nechi')->count();
      $c_san_benito_abad  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','san-benito-abad')->count();
      $c_san_jacinto_cauca  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','san-jacinto-cauca')->count();
      $c_san_marcos  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','san-marcos')->count();
      $c_sucre  = \DB::table('participaciones as participacion')->select('participacion.ubicacion_solucion_ambiental')->where('participacion.ubicacion_solucion_economico','sucre')->count();


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

    public function obtenerQuestions($option){


      if($option == "general"){

        $count_Q_01_E  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.Q_01','E')->count();
        $count_Q_01_B  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.Q_01','B')->count();
        $count_Q_01_M  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.Q_01','M')->count();
        $count_Q_01_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.Q_01','NE')->count();
        //Question 2
        $count_Q_02_E  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.Q_02','E')->count();
        $count_Q_02_B  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.Q_02','B')->count();
        $count_Q_02_M  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.Q_02','M')->count();
        $count_Q_02_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.Q_02','NE')->count();
        //Question 3
        $count_Q_03_E  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.Q_03','E')->count();
        $count_Q_03_B  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.Q_03','B')->count();
        $count_Q_03_M  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.Q_03','M')->count();
        $count_Q_03_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.Q_03','NE')->count();
        //Question 4
        $count_Q_04_E  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.Q_04','E')->count();
        $count_Q_04_B  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.Q_04','B')->count();
        $count_Q_04_M  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.Q_04','M')->count();
        $count_Q_04_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.Q_04','NE')->count();
        //Question 5
        $count_Q_05_E  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.Q_05','E')->count();
        $count_Q_05_B  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.Q_05','B')->count();
        $count_Q_05_M  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.Q_05','M')->count();
        $count_Q_05_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.Q_05','NE')->count();
        //Question 6
        $count_Q_06_E  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.Q_06','E')->count();
        $count_Q_06_B  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.Q_06','B')->count();
        $count_Q_06_M  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.Q_06','M')->count();
        $count_Q_06_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.Q_06','NE')->count();
        //Question 7
        $count_Q_07_E  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.Q_07','E')->count();
        $count_Q_07_B  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.Q_07','B')->count();
        $count_Q_07_M  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.Q_07','M')->count();
        $count_Q_07_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.Q_07','NE')->count();
        //Question 8
        $count_Q_08_E  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.Q_08','E')->count();
        $count_Q_08_B  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.Q_08','B')->count();
        $count_Q_08_M  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.Q_08','M')->count();
        $count_Q_08_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.Q_08','NE')->count();
        //Question 9
        $count_Q_09_E  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.Q_09','E')->count();
        $count_Q_09_B  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.Q_09','B')->count();
        $count_Q_09_M  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.Q_09','M')->count();
        $count_Q_09_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.Q_09','NE')->count();
        //Question10
        $count_Q_10_E  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.Q_10','E')->count();
        $count_Q_10_B  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.Q_10','B')->count();
        $count_Q_10_M  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.Q_10','M')->count();
        $count_Q_10_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.Q_10','NE')->count();
        //Question 11
        $count_Q_11_E  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.Q_11','E')->count();
        $count_Q_11_B  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.Q_11','B')->count();
        $count_Q_11_M  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.Q_11','M')->count();
        $count_Q_11_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.Q_11','NE')->count();
        //Question 12
        $count_Q_12_E  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.Q_12','E')->count();
        $count_Q_12_B  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.Q_12','B')->count();
        $count_Q_12_M  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.Q_12','M')->count();
        $count_Q_12_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.Q_12','NE')->count();
        //Question 13
        $count_Q_13_E  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.Q_13','E')->count();
        $count_Q_13_B  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.Q_13','B')->count();
        $count_Q_13_M  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.Q_13','M')->count();
        $count_Q_13_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.Q_13','NE')->count();
        //Question 14
        $count_Q_14_E  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.Q_14','E')->count();
        $count_Q_14_B  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.Q_14','B')->count();
        $count_Q_14_M  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.Q_14','M')->count();
        $count_Q_14_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.Q_14','NE')->count();
        //Question 15
        $count_Q_15_E  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.Q_15','E')->count();
        $count_Q_15_B  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.Q_15','B')->count();
        $count_Q_15_M  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.Q_15','M')->count();
        $count_Q_15_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.Q_15','NE')->count();
        //Question 16
        $count_Q_16_E  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.Q_16','E')->count();
        $count_Q_16_B  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.Q_16','B')->count();
        $count_Q_16_M  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.Q_16','M')->count();
        $count_Q_16_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.Q_16','NE')->count();
        //Question 17
        $count_Q_17_E  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.Q_17','E')->count();
        $count_Q_17_B  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.Q_17','B')->count();
        $count_Q_17_M  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.Q_17','M')->count();
        $count_Q_17_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.Q_17','NE')->count();
        //Question 18
        $count_Q_18_E  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.Q_18','E')->count();
        $count_Q_18_B  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.Q_18','B')->count();
        $count_Q_18_M  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.Q_18','M')->count();
        $count_Q_18_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.Q_18','NE')->count();
        //Question 19
        $count_Q_19_E  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.Q_19','E')->count();
        $count_Q_19_B  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.Q_19','B')->count();
        $count_Q_19_M  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.Q_19','M')->count();
        $count_Q_19_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.Q_19','NE')->count();
        //Question 20
        $count_Q_20_E  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.Q_20','E')->count();
        $count_Q_20_B  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.Q_20','B')->count();
        $count_Q_20_M  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.Q_20','M')->count();
        $count_Q_20_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.Q_20','NE')->count();
        //Question 21
        $count_Q_21_E  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.Q_21','E')->count();
        $count_Q_21_B  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.Q_21','B')->count();
        $count_Q_21_M  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.Q_21','M')->count();
        $count_Q_21_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.Q_21','NE')->count();


      }
      else{
        $count_Q_01_E  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.municipio_residencia',$option)->where('participacion.Q_01','E')->count();
        $count_Q_01_B  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.municipio_residencia',$option)->where('participacion.Q_01','B')->count();
        $count_Q_01_M  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.municipio_residencia',$option)->where('participacion.Q_01','M')->count();
        $count_Q_01_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_01')->where('participacion.municipio_residencia',$option)->where('participacion.Q_01','NE')->count();
        //Question 2
        $count_Q_02_E  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.municipio_residencia',$option)->where('participacion.Q_02','E')->count();
        $count_Q_02_B  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.municipio_residencia',$option)->where('participacion.Q_02','B')->count();
        $count_Q_02_M  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.municipio_residencia',$option)->where('participacion.Q_02','M')->count();
        $count_Q_02_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_02')->where('participacion.municipio_residencia',$option)->where('participacion.Q_02','NE')->count();
        //Question 3
        $count_Q_03_E  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.municipio_residencia',$option)->where('participacion.Q_03','E')->count();
        $count_Q_03_B  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.municipio_residencia',$option)->where('participacion.Q_03','B')->count();
        $count_Q_03_M  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.municipio_residencia',$option)->where('participacion.Q_03','M')->count();
        $count_Q_03_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_03')->where('participacion.municipio_residencia',$option)->where('participacion.Q_03','NE')->count();
        //Question 4
        $count_Q_04_E  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.municipio_residencia',$option)->where('participacion.Q_04','E')->count();
        $count_Q_04_B  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.municipio_residencia',$option)->where('participacion.Q_04','B')->count();
        $count_Q_04_M  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.municipio_residencia',$option)->where('participacion.Q_04','M')->count();
        $count_Q_04_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_04')->where('participacion.municipio_residencia',$option)->where('participacion.Q_04','NE')->count();
        //Question 5
        $count_Q_05_E  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.municipio_residencia',$option)->where('participacion.Q_05','E')->count();
        $count_Q_05_B  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.municipio_residencia',$option)->where('participacion.Q_05','B')->count();
        $count_Q_05_M  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.municipio_residencia',$option)->where('participacion.Q_05','M')->count();
        $count_Q_05_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_05')->where('participacion.municipio_residencia',$option)->where('participacion.Q_05','NE')->count();
        //Question 6
        $count_Q_06_E  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.municipio_residencia',$option)->where('participacion.Q_06','E')->count();
        $count_Q_06_B  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.municipio_residencia',$option)->where('participacion.Q_06','B')->count();
        $count_Q_06_M  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.municipio_residencia',$option)->where('participacion.Q_06','M')->count();
        $count_Q_06_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_06')->where('participacion.municipio_residencia',$option)->where('participacion.Q_06','NE')->count();
        //Question 7
        $count_Q_07_E  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.municipio_residencia',$option)->where('participacion.Q_07','E')->count();
        $count_Q_07_B  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.municipio_residencia',$option)->where('participacion.Q_07','B')->count();
        $count_Q_07_M  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.municipio_residencia',$option)->where('participacion.Q_07','M')->count();
        $count_Q_07_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_07')->where('participacion.municipio_residencia',$option)->where('participacion.Q_07','NE')->count();
        //Question 8
        $count_Q_08_E  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.municipio_residencia',$option)->where('participacion.Q_08','E')->count();
        $count_Q_08_B  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.municipio_residencia',$option)->where('participacion.Q_08','B')->count();
        $count_Q_08_M  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.municipio_residencia',$option)->where('participacion.Q_08','M')->count();
        $count_Q_08_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_08')->where('participacion.municipio_residencia',$option)->where('participacion.Q_08','NE')->count();
        //Question 9
        $count_Q_09_E  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.municipio_residencia',$option)->where('participacion.Q_09','E')->count();
        $count_Q_09_B  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.municipio_residencia',$option)->where('participacion.Q_09','B')->count();
        $count_Q_09_M  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.municipio_residencia',$option)->where('participacion.Q_09','M')->count();
        $count_Q_09_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_09')->where('participacion.municipio_residencia',$option)->where('participacion.Q_09','NE')->count();
        //Question10
        $count_Q_10_E  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.municipio_residencia',$option)->where('participacion.Q_10','E')->count();
        $count_Q_10_B  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.municipio_residencia',$option)->where('participacion.Q_10','B')->count();
        $count_Q_10_M  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.municipio_residencia',$option)->where('participacion.Q_10','M')->count();
        $count_Q_10_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_10')->where('participacion.municipio_residencia',$option)->where('participacion.Q_10','NE')->count();
        //Question 11
        $count_Q_11_E  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.municipio_residencia',$option)->where('participacion.Q_11','E')->count();
        $count_Q_11_B  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.municipio_residencia',$option)->where('participacion.Q_11','B')->count();
        $count_Q_11_M  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.municipio_residencia',$option)->where('participacion.Q_11','M')->count();
        $count_Q_11_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_11')->where('participacion.municipio_residencia',$option)->where('participacion.Q_11','NE')->count();
        //Question 12
        $count_Q_12_E  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.municipio_residencia',$option)->where('participacion.Q_12','E')->count();
        $count_Q_12_B  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.municipio_residencia',$option)->where('participacion.Q_12','B')->count();
        $count_Q_12_M  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.municipio_residencia',$option)->where('participacion.Q_12','M')->count();
        $count_Q_12_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_12')->where('participacion.municipio_residencia',$option)->where('participacion.Q_12','NE')->count();
        //Question 13
        $count_Q_13_E  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.municipio_residencia',$option)->where('participacion.Q_13','E')->count();
        $count_Q_13_B  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.municipio_residencia',$option)->where('participacion.Q_13','B')->count();
        $count_Q_13_M  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.municipio_residencia',$option)->where('participacion.Q_13','M')->count();
        $count_Q_13_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_13')->where('participacion.municipio_residencia',$option)->where('participacion.Q_13','NE')->count();
        //Question 14
        $count_Q_14_E  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.municipio_residencia',$option)->where('participacion.Q_14','E')->count();
        $count_Q_14_B  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.municipio_residencia',$option)->where('participacion.Q_14','B')->count();
        $count_Q_14_M  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.municipio_residencia',$option)->where('participacion.Q_14','M')->count();
        $count_Q_14_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_14')->where('participacion.municipio_residencia',$option)->where('participacion.Q_14','NE')->count();
        //Question 15
        $count_Q_15_E  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.municipio_residencia',$option)->where('participacion.Q_15','E')->count();
        $count_Q_15_B  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.municipio_residencia',$option)->where('participacion.Q_15','B')->count();
        $count_Q_15_M  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.municipio_residencia',$option)->where('participacion.Q_15','M')->count();
        $count_Q_15_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_15')->where('participacion.municipio_residencia',$option)->where('participacion.Q_15','NE')->count();
        //Question 16
        $count_Q_16_E  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.municipio_residencia',$option)->where('participacion.Q_16','E')->count();
        $count_Q_16_B  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.municipio_residencia',$option)->where('participacion.Q_16','B')->count();
        $count_Q_16_M  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.municipio_residencia',$option)->where('participacion.Q_16','M')->count();
        $count_Q_16_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_16')->where('participacion.municipio_residencia',$option)->where('participacion.Q_16','NE')->count();
        //Question 17
        $count_Q_17_E  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.municipio_residencia',$option)->where('participacion.Q_17','E')->count();
        $count_Q_17_B  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.municipio_residencia',$option)->where('participacion.Q_17','B')->count();
        $count_Q_17_M  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.municipio_residencia',$option)->where('participacion.Q_17','M')->count();
        $count_Q_17_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_17')->where('participacion.municipio_residencia',$option)->where('participacion.Q_17','NE')->count();
        //Question 18
        $count_Q_18_E  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.municipio_residencia',$option)->where('participacion.Q_18','E')->count();
        $count_Q_18_B  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.municipio_residencia',$option)->where('participacion.Q_18','B')->count();
        $count_Q_18_M  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.municipio_residencia',$option)->where('participacion.Q_18','M')->count();
        $count_Q_18_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_18')->where('participacion.municipio_residencia',$option)->where('participacion.Q_18','NE')->count();
        //Question 19
        $count_Q_19_E  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.municipio_residencia',$option)->where('participacion.Q_19','E')->count();
        $count_Q_19_B  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.municipio_residencia',$option)->where('participacion.Q_19','B')->count();
        $count_Q_19_M  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.municipio_residencia',$option)->where('participacion.Q_19','M')->count();
        $count_Q_19_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_19')->where('participacion.municipio_residencia',$option)->where('participacion.Q_19','NE')->count();
        //Question 20
        $count_Q_20_E  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.municipio_residencia',$option)->where('participacion.Q_20','E')->count();
        $count_Q_20_B  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.municipio_residencia',$option)->where('participacion.Q_20','B')->count();
        $count_Q_20_M  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.municipio_residencia',$option)->where('participacion.Q_20','M')->count();
        $count_Q_20_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_20')->where('participacion.municipio_residencia',$option)->where('participacion.Q_20','NE')->count();
        //Question 21
        $count_Q_21_E  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.municipio_residencia',$option)->where('participacion.Q_21','E')->count();
        $count_Q_21_B  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.municipio_residencia',$option)->where('participacion.Q_21','B')->count();
        $count_Q_21_M  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.municipio_residencia',$option)->where('participacion.Q_21','M')->count();
        $count_Q_21_NE  = \DB::table('participaciones as participacion')->select('participacion.Q_21')->where('participacion.municipio_residencia',$option)->where('participacion.Q_21','NE')->count();

      }


      $total_questions1 = $count_Q_01_E + $count_Q_01_B + $count_Q_01_M + $count_Q_01_NE;
      if($total_questions1 == 0){
        $e01 = 0;
        $b01 = 0;
        $m01 = 0;
        $ne01 = 0;
      }else{
        $e01 = $count_Q_01_E * 100 / $total_questions1;
        $b01 = $count_Q_01_B * 100 / $total_questions1;
        $m01 = $count_Q_01_M * 100 / $total_questions1;
        $ne01 = $count_Q_01_NE * 100 / $total_questions1;
      }
      $q_01 = array('e'=> $this->gRV($e01), 'b' => $this->gRV($b01), 'm' => $this->gRV($m01), 'ne' => $this->gRV($ne01));

      //Process Question 2
      $total_questions2 = $count_Q_02_E + $count_Q_02_B + $count_Q_02_M + $count_Q_02_NE;
      if($total_questions2 == 0){
        $e02 = 0;
        $b02 = 0;
        $m02 = 0;
        $ne02 = 0;
      }else{
        $e02 = $count_Q_02_E * 100 / $total_questions2;
        $b02 = $count_Q_02_B * 100 / $total_questions2;
        $m02 = $count_Q_02_M * 100 / $total_questions2;
        $ne02 = $count_Q_02_NE * 100 / $total_questions2;
      }
      $q_02 = array('e'=> $this->gRV($e02), 'b' => $this->gRV($b02), 'm' => $this->gRV($m02), 'ne' => $this->gRV($ne02));

      //Process Question 3
      $total_questions3 = $count_Q_03_E + $count_Q_03_B + $count_Q_03_M + $count_Q_03_NE;
      if($total_questions3 == 0){
        $e03 = 0;
        $b03 = 0;
        $m03 = 0;
        $ne03 = 0;
      }else{
        $e03 = $count_Q_03_E * 100 / $total_questions3;
        $b03 = $count_Q_03_B * 100 / $total_questions3;
        $m03 = $count_Q_03_M * 100 / $total_questions3;
        $ne03 = $count_Q_03_NE * 100 / $total_questions3;
      }
      $q_03 = array('e'=> $e03, 'b' => $b03, 'm' => $m03, 'ne' => $ne03);

      //Process Question 4
      $total_questions4 = $count_Q_04_E + $count_Q_04_B + $count_Q_04_M + $count_Q_04_NE;
      if($total_questions4 == 0){
        $e04 = 0;
        $b04 = 0;
        $m04 = 0;
        $ne04 = 0;
      }else{
        $e04 = $count_Q_04_E * 100 / $total_questions4;
        $b04 = $count_Q_04_B * 100 / $total_questions4;
        $m04 = $count_Q_04_M * 100 / $total_questions4;
        $ne04 = $count_Q_04_NE * 100 / $total_questions4;
      }
      $q_04 = array('e'=> $e04, 'b' => $b04, 'm' => $m04, 'ne' => $ne04);

      //Process Question 5
      $total_questions5 = $count_Q_05_E + $count_Q_05_B + $count_Q_05_M + $count_Q_05_NE;
      if($total_questions5 == 0){
        $e05 = 0;
        $b05 = 0;
        $m05 = 0;
        $ne05 = 0;
      }else{
        $e05 = $count_Q_05_E * 100 / $total_questions5;
        $b05 = $count_Q_05_B * 100 / $total_questions5;
        $m05 = $count_Q_05_M * 100 / $total_questions5;
        $ne05 = $count_Q_05_NE * 100 / $total_questions5;
      }
      $q_05 = array('e'=> $e05, 'b' => $b05, 'm' => $m05, 'ne' => $ne05);

      //Process Question 6
      $total_questions6 = $count_Q_06_E + $count_Q_06_B + $count_Q_06_M + $count_Q_06_NE;
      if($total_questions6 == 0){
        $e06 = 0;
        $b06 = 0;
        $m06 = 0;
        $ne06 = 0;
      }else{
        $e06 = $count_Q_06_E * 100 / $total_questions6;
        $b06 = $count_Q_06_B * 100 / $total_questions6;
        $m06 = $count_Q_06_M * 100 / $total_questions6;
        $ne06 = $count_Q_06_NE * 100 / $total_questions6;
      }
      $q_06 = array('e'=> $e06, 'b' => $b06, 'm' => $m06, 'ne' => $ne06);

      //Process Question 7
      $total_questions7 = $count_Q_07_E + $count_Q_07_B + $count_Q_07_M + $count_Q_07_NE;
      if($total_questions7 == 0){
        $e07 = 0;
        $b07 = 0;
        $m07 = 0;
        $ne07 = 0;
      }else{
        $e07 = $count_Q_07_E * 100 / $total_questions7;
        $b07 = $count_Q_07_B * 100 / $total_questions7;
        $m07 = $count_Q_07_M * 100 / $total_questions7;
        $ne07 = $count_Q_07_NE * 100 / $total_questions7;
      }
      $q_07 = array('e'=> $e07, 'b' => $b07, 'm' => $m07, 'ne' => $ne07);


      $total_questions8 = $count_Q_08_E + $count_Q_08_B + $count_Q_08_M + $count_Q_08_NE;
      if($total_questions8 == 0){
        $e08 = 0;
        $b08 = 0;
        $m08 = 0;
        $ne08 = 0;
      }else{
        $e08 = $count_Q_08_E * 100 / $total_questions8;
        $b08 = $count_Q_08_B * 100 / $total_questions8;
        $m08 = $count_Q_08_M * 100 / $total_questions8;
        $ne08 = $count_Q_08_NE * 100 / $total_questions8;
      }
      $q_08 = array('e'=> $e08, 'b' => $b08, 'm' => $m08, 'ne' => $ne08);


      $total_questions9 = $count_Q_09_E + $count_Q_09_B + $count_Q_09_M + $count_Q_09_NE;
      if($total_questions9 == 0){
        $e09 = 0;
        $b09 = 0;
        $m09 = 0;
        $ne09 = 0;
      }else{
        $e09 = $count_Q_09_E * 100 / $total_questions9;
        $b09 = $count_Q_09_B * 100 / $total_questions9;
        $m09 = $count_Q_09_M * 100 / $total_questions9;
        $ne09 = $count_Q_09_NE * 100 / $total_questions9;
      }
      $q_09 = array('e'=> $e09, 'b' => $b09, 'm' => $m09, 'ne' => $ne09);

      $total_questions10 = $count_Q_10_E + $count_Q_10_B + $count_Q_10_M + $count_Q_10_NE;
      if($total_questions10 == 0){
        $e10 = 0;
        $b10 = 0;
        $m10 = 0;
        $ne10 = 0;
      }else{
        $e10 = $count_Q_10_E * 100 / $total_questions10;
        $b10 = $count_Q_10_B * 100 / $total_questions10;
        $m10 = $count_Q_10_M * 100 / $total_questions10;
        $ne10 = $count_Q_10_NE * 100 / $total_questions10;
      }
      $q_10 = array('e'=> $e10, 'b' => $b10, 'm' => $m10, 'ne' => $ne10);


      $total_questions11 = $count_Q_11_E + $count_Q_11_B + $count_Q_11_M + $count_Q_11_NE;
      if($total_questions11 == 0){
        $e11 = 0;
        $b11 = 0;
        $m11 = 0;
        $ne11 = 0;
      }else{
        $e11 = $count_Q_11_E * 100 / $total_questions11;
        $b11 = $count_Q_11_B * 100 / $total_questions11;
        $m11 = $count_Q_11_M * 100 / $total_questions11;
        $ne11 = $count_Q_11_NE * 100 / $total_questions11;
      }
      $q_11 = array('e'=> $e11, 'b' => $b11, 'm' => $m11, 'ne' => $ne11);


      $total_questions12 = $count_Q_12_E + $count_Q_12_B + $count_Q_12_M + $count_Q_12_NE;
      if($total_questions12 == 0){
        $e12 = 0;
        $b12 = 0;
        $m12 = 0;
        $ne12 = 0;
      }else{
        $e12 = $count_Q_12_E * 100 / $total_questions12;
        $b12 = $count_Q_12_B * 100 / $total_questions12;
        $m12 = $count_Q_12_M * 100 / $total_questions12;
        $ne12 = $count_Q_12_NE * 100 / $total_questions12;
      }
      $q_12 = array('e'=> $e12, 'b' => $b12, 'm' => $m12, 'ne' => $ne12);


      $total_questions13 = $count_Q_13_E + $count_Q_13_B + $count_Q_13_M + $count_Q_13_NE;
      if($total_questions13 == 0){
        $e13 = 0;
        $b13 = 0;
        $m13 = 0;
        $ne13 = 0;
      }else{
        $e13 = $count_Q_13_E * 100 / $total_questions13;
        $b13 = $count_Q_13_B * 100 / $total_questions13;
        $m13 = $count_Q_13_M * 100 / $total_questions13;
        $ne13 = $count_Q_13_NE * 100 / $total_questions13;
      }
      $q_13 = array('e'=> $e13, 'b' => $b13, 'm' => $m13, 'ne' => $ne13);


      $total_questions14 = $count_Q_14_E + $count_Q_14_B + $count_Q_14_M + $count_Q_14_NE;
      if($total_questions14 == 0){
        $e14 = 0;
        $b14 = 0;
        $m14 = 0;
        $ne14 = 0;
      }else{
        $e14 = $count_Q_14_E * 100 / $total_questions14;
        $b14 = $count_Q_14_B * 100 / $total_questions14;
        $m14 = $count_Q_14_M * 100 / $total_questions14;
        $ne14 = $count_Q_14_NE * 100 / $total_questions14;
      }
      $q_14 = array('e'=> $e14, 'b' => $b14, 'm' => $m14, 'ne' => $ne14);


      $total_questions15 = $count_Q_15_E + $count_Q_15_B + $count_Q_15_M + $count_Q_15_NE;
      if($total_questions15 == 0){
        $e15 = 0;
        $b15 = 0;
        $m15 = 0;
        $ne15 = 0;
      }else{
        $e15 = $count_Q_15_E * 100 / $total_questions15;
        $b15 = $count_Q_15_B * 100 / $total_questions15;
        $m15 = $count_Q_15_M * 100 / $total_questions15;
        $ne15 = $count_Q_15_NE * 100 / $total_questions15;
      }
      $q_15 = array('e'=> $e15, 'b' => $b15, 'm' => $m15, 'ne' => $ne15);


      $total_questions16 = $count_Q_16_E + $count_Q_16_B + $count_Q_16_M + $count_Q_16_NE;
      if($total_questions16 == 0){
        $e16 = 0;
        $b16 = 0;
        $m16 = 0;
        $ne16 = 0;
      }else{
        $e16 = $count_Q_16_E * 100 / $total_questions16;
        $b16 = $count_Q_16_B * 100 / $total_questions16;
        $m16 = $count_Q_16_M * 100 / $total_questions16;
        $ne16 = $count_Q_16_NE * 100 / $total_questions16;
      }
      $q_16 = array('e'=> $e16, 'b' => $b16, 'm' => $m16, 'ne' => $ne16);


      $total_questions17 = $count_Q_17_E + $count_Q_17_B + $count_Q_17_M + $count_Q_17_NE;
      if($total_questions17 == 0){
        $e17 = 0;
        $b17 = 0;
        $m17 = 0;
        $ne17 = 0;
      }else{
        $e17 = $count_Q_17_E * 100 / $total_questions17;
        $b17 = $count_Q_17_B * 100 / $total_questions17;
        $m17 = $count_Q_17_M * 100 / $total_questions17;
        $ne17 = $count_Q_17_NE * 100 / $total_questions17;
      }
      $q_17 = array('e'=> $e17, 'b' => $b17, 'm' => $m17, 'ne' => $ne17);


      $total_questions18 = $count_Q_18_E + $count_Q_18_B + $count_Q_18_M + $count_Q_18_NE;
      if($total_questions18 == 0){
        $e18 = 0;
        $b18 = 0;
        $m18 = 0;
        $ne18 = 0;
      }else{
        $e18 = $count_Q_18_E * 100 / $total_questions18;
        $b18 = $count_Q_18_B * 100 / $total_questions18;
        $m18 = $count_Q_18_M * 100 / $total_questions18;
        $ne18 = $count_Q_18_NE * 100 / $total_questions18;
      }
      $q_18 = array('e'=> $e18, 'b' => $b18, 'm' => $m18, 'ne' => $ne18);

      $total_questions19 = $count_Q_19_E + $count_Q_19_B + $count_Q_19_M + $count_Q_19_NE;
      if($total_questions19 == 0){
        $e19 = 0;
        $b19 = 0;
        $m19 = 0;
        $ne19 = 0;
      }else{
        $e19 = $count_Q_19_E * 100 / $total_questions19;
        $b19 = $count_Q_19_B * 100 / $total_questions19;
        $m19 = $count_Q_19_M * 100 / $total_questions19;
        $ne19 = $count_Q_19_NE * 100 / $total_questions19;
      }
      $q_19 = array('e'=> $e19, 'b' => $b19, 'm' => $m19, 'ne' => $ne19);

      $total_questions20 = $count_Q_20_E + $count_Q_20_B + $count_Q_20_M + $count_Q_20_NE;
      if($total_questions20 == 0){
        $e20 = 0;
        $b20 = 0;
        $m20 = 0;
        $ne20 = 0;
      }else{
        $e20 = $count_Q_20_E * 100 / $total_questions20;
        $b20 = $count_Q_20_B * 100 / $total_questions20;
        $m20 = $count_Q_20_M * 100 / $total_questions20;
        $ne20 = $count_Q_20_NE * 100 / $total_questions20;
      }
      $q_20 = array('e'=> $e20, 'b' => $b20, 'm' => $m20, 'ne' => $ne20);


      $total_questions21 = $count_Q_21_E + $count_Q_21_B + $count_Q_21_M + $count_Q_21_NE;
      if($total_questions20 == 0){
        $e21 = 0;
        $b21 = 0;
        $m21 = 0;
        $ne21 = 0;
      }else{
        $e21 = $count_Q_21_E * 100 / $total_questions21;
        $b21 = $count_Q_21_B * 100 / $total_questions21;
        $m21 = $count_Q_21_M * 100 / $total_questions21;
        $ne21 = $count_Q_21_NE * 100 / $total_questions21;
      }
      $q_21 = array('e'=> $e21, 'b' => $b21, 'm' => $m21, 'ne' => $ne21);

      //Consulta General Por calificacion
      $c_excelent = $e01 + $e02 + $e04 + $e05 + $e06 + $e07 + $e08 + $e09 + $e10 + $e11 + $e12 + $e13 + $e14 + $e15 + $e16 + $e17 + $e18 + $e19 + $e20
      + $e21;

      $c_bueno = $b01 + $b02 + $b04 + $b05 + $b06 + $b07 + $b08 + $b09 + $b10 + $b11 + $b12 + $b13 + $b14 + $b15 + $b16 + $b17 + $b18 + $b19 + $b20
      + $b21;

      $c_malo = $m01 + $m02 + $m04 + $m05 + $m06 + $m07 + $m08 + $m09 + $m10 + $m11 + $m12 + $m13 + $m14 + $m15 + $m16 + $m17 + $m18 + $m19 + $m20
      + $m21;

      $c_nexiste = $ne01 + $ne02 + $ne04 + $ne05 + $ne06 + $ne07 + $ne08 + $ne09 + $ne10 + $ne11 + $ne12 + $ne13 + $ne14 + $ne15 + $ne16 + $ne17 + $ne18 + $ne19 + $ne20
      + $ne21;

      if($c_excelent == 0){
        $excelente = 0;
      }else{
        $excelente = round($c_excelent * 1 / 21);
      }

      if($c_bueno == 0){
        $bueno = 0;
      }else{
        $bueno = round($c_bueno * 1 / 21);
      }

      if($c_malo == 0){
        $malo = 0;
      }else{
        $malo = round($c_malo * 1 / 21);
      }

      if($c_nexiste == 0){
        $no_existe = 0;
      }else{
        $no_existe = round($c_nexiste * 1 / 21);
      }

      $data = array('e'=> $excelente, 'b' => $bueno, 'm' => $malo, 'ne' => $no_existe);


      $general = array('data' =>$data ,'q_01' =>$q_01 , 'q_02'=>$q_02, 'q_03'=>$q_03, 'q_04'=>$q_04, 'q_05'=>$q_05, 'q_06'=>$q_06,'q_07'=>$q_07,'q_08'=>$q_08,'q_09'=>$q_09,'q_10'=>$q_10,
      'q_11'=>$q_11,'q_12'=>$q_12,'q_13'=>$q_13,'q_14'=>$q_14,'q_15'=>$q_15,'q_16'=>$q_16,'q_17'=>$q_17,'q_18'=>$q_18,'q_19'=>$q_19,'q_20'=>$q_20,'q_21'=>$q_21);


      return $general;
    }

    public function obtenerMapaAmbiental(){
      $data  = \DB::table('participaciones as participacion')
                ->select('participacion.ubicacion_latitud_ambiental as latitud','participacion.ubicacion_longitud_ambiental as longitud','participacion.municipio_residencia as municipio','participacion.nombres_apellidos as nombres')
                ->get();
      return response()->json($data);
    }

    public function obtenerMapaEconomico(){
      $data  = \DB::table('participaciones as participacion')
                ->select('participacion.ubicacion_latitud_economico as latitud','participacion.ubicacion_longitud_economico as longitud','participacion.municipio_residencia as municipio','participacion.nombres_apellidos as nombres')
                ->get();
      return $data;
    }

    public function obtenerMapaSocial(){
      $data  = \DB::table('participaciones as participacion')
                ->select('participacion.ubicacion_latitud_social as latitud','participacion.ubicacion_longitud_social as longitud','participacion.municipio_residencia as municipio','participacion.nombres_apellidos as nombres')
                ->get();
      return $data;
    }

    public function obtenerMapaGeneral(){

      $social  = \DB::table('participaciones as participacion')
                ->select('participacion.ubicacion_latitud_social as latitud','participacion.ubicacion_longitud_social as longitud','participacion.municipio_residencia as municipio','participacion.nombres_apellidos as nombres')
                ->get();
      $economico  = \DB::table('participaciones as participacion')
                ->select('participacion.ubicacion_latitud_economico as latitud','participacion.ubicacion_longitud_economico as longitud','participacion.municipio_residencia as municipio','participacion.nombres_apellidos as nombres')
                ->get();

      $ambiental  = \DB::table('participaciones as participacion')
                ->select('participacion.ubicacion_latitud_ambiental as latitud','participacion.ubicacion_longitud_ambiental as longitud','participacion.municipio_residencia as municipio','participacion.nombres_apellidos as nombres')
                ->get();

      $array = [];
      foreach($social as $s){
        array_push($array,array("latitud"=>$s->latitud,"longitud"=>$s->longitud,"municipio"=>$s->municipio,"nombres"=>$s->nombres,"dimension"=>"social"));
      }
      foreach($economico as $e){
        array_push($array,array("latitud"=>$e->latitud,"longitud"=>$e->longitud,"municipio"=>$e->municipio,"nombres"=>$e->nombres,"dimension"=>"economico"));
      }
      foreach($ambiental as $a){
        array_push($array,array("latitud"=>$a->latitud,"longitud"=>$a->longitud,"municipio"=>$a->municipio,"nombres"=>$a->nombres,"dimension"=>"ambiental"));
      }

      return $array;

    }

    public function obtenerSectorPertenece($option){
      //Query Ocupacion
      if($option == "general"){
        $c_ninguno = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Ninguno')->count();
        $c_transporte_vias = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Transporte y vias')->count();
        $c_gremios = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Gremios')->count();
        $c_medio_ambiente = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();
        $c_infraestructura = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Infraestructura y servicios publicos')->count();

      }else{
        $c_ninguno = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Ninguno')->count();
        $c_transporte_vias = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Transporte y vias')->count();
        $c_gremios = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Gremios')->count();
        $c_medio_ambiente = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();
        $c_infraestructura = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.municipio_residencia',$option)->where('participacion.sector_pertenece','Infraestructura y servicios publicos')->count();

      }

      $sector_total = $c_ninguno+$c_transporte_vias+$c_gremios+$c_medio_ambiente+$c_infraestructura;
      if($sector_total == 0){
        $ninguno = 0;
        $transporte_vias = 0;
        $gremios = 0;
        $medio_ambiente = 0;
        $infraestructura = 0;
      }else{
        $ninguno = $c_ninguno * 100 / $sector_total;
        $transporte_vias = $c_transporte_vias * 100 / $sector_total;
        $gremios = $c_gremios * 100 / $sector_total;
        $medio_ambiente = $c_medio_ambiente * 100 / $sector_total;
        $infraestructura = $c_infraestructura * 100 / $sector_total;
      }

      $data = array('ninguno'=> $ninguno, 'transporte_vias' => $transporte_vias,'gremios'=> $gremios, 'medio_ambiente' => $c_medio_ambiente,'infraestructura'=> $c_infraestructura);

      return $data;
    }

    public function obtenerEdades($option){

      if($option == "general"){
        $c_01 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [18, 25])
                      ->count();
        $c_02 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [25, 35])
                      ->count();
        $c_03 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [35, 45])
                      ->count();
        $c_04 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [45, 55])
                      ->count();
        $c_05 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [55, 68])
                      ->count();
        $c_06 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [68, 77])
                      ->count();
      }else{
        $c_01 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [18, 25])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_02 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [25, 35])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_03 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [35, 45])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_04 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [45, 55])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_05 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [55, 68])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_06 = \DB::table('participaciones as participacion')->select('participacion.edad')
                      ->whereBetween('participacion.edad', [68, 77])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
      }



      $total_edades = $c_01 + $c_02 + $c_03 + $c_04 + $c_05 + $c_06;
      if($total_edades == 0){
        $option_01 = 0;
        $option_02 = 0;
        $option_03 = 0;
        $option_04 = 0;
        $option_05 = 0;
        $option_06 = 0;
      }else{
        $option_01 = $c_01 * 100 / $total_edades;
        $option_02 = $c_02 * 100 / $total_edades;
        $option_03 = $c_03 * 100 / $total_edades;
        $option_04 = $c_04 * 100 / $total_edades;
        $option_05 = $c_05 * 100 / $total_edades;
        $option_06 = $c_06 * 100 / $total_edades;
      }

      $data = array('opt01'=> $option_01, 'opt02' => $option_02,'opt03'=> $option_03, 'opt04' => $option_04,'opt05'=> $option_05,'opt06'=> $option_06);

      return $data;
    }

    public function obtenerSituacionDesplazamiento($option){
      //Query Genero
      if($option == "general"){
        $c_desplazado = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.situacion_dezplazamiento_conflicto',1)->count();
        $c_nodesplazado  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.situacion_dezplazamiento_conflicto',0)->count();

      }else{
        $c_desplazado = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia',$option)->where('participacion.situacion_dezplazamiento_conflicto',1)->count();
        $c_nodesplazado  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.municipio_residencia',$option)->where('participacion.situacion_dezplazamiento_conflicto',0)->count();
      }

      $situacion_desplazado = $c_desplazado + $c_nodesplazado;
      if($situacion_desplazado == 0){
        $desplazado = 0;
        $nodesplazado = 0;
      }else{
        $desplazado = $c_desplazado * 100 / $situacion_desplazado;
        $nodesplazado = 100 - $desplazado;
      }

      $data = array('desplazado'=> $desplazado, 'no_desplazado' => $nodesplazado);

      return $data;
    }

    public function obtenerTiempoResidencia($option){

      if($option == "general"){
        $c_01 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [1, 10])
                      ->count();
        $c_02 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [11, 20])
                      ->count();
        $c_03 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [21, 30])
                      ->count();
        $c_04 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [30, 100])
                      ->count();
      }else{
        $c_01 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [1, 10])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_02 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [11, 20])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_03 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [21, 30])
                      ->where('participacion.municipio_residencia',$option)
                      ->count();
        $c_04 = \DB::table('participaciones as participacion')->select('participacion.tiempo_residencia')
                      ->whereBetween('participacion.tiempo_residencia', [30, 100])
                      ->count();
      }


      $total_edades = $c_01 + $c_02 + $c_03 + $c_04;
      if($total_edades == 0){
        $option_01 = 0;
        $option_02 = 0;
        $option_03 = 0;
        $option_04 = 0;
      }else{
        $option_01 = $c_01 * 100 / $total_edades;
        $option_02 = $c_02 * 100 / $total_edades;
        $option_03 = $c_03 * 100 / $total_edades;
        $option_04 = $c_04 * 100 / $total_edades;
      }

      $data = array('opt01'=> $this->gRV($option_01), 'opt02' => $this->gRV($option_02),'opt03'=> $this->gRV($option_03), 'opt04' => $this->gRV($option_04));

      return $data;
    }

}
