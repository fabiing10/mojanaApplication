<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    //

    public function obtenerGenero(){
      //Query Genero
      $h_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',1)->count();
      $m_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',2)->count();
      $o_query  = \DB::table('participaciones as participacion')->select('participacion.genero')->where('participacion.genero',3)->count();
      $genero_total = $h_query + $m_query+ $o_query;

      $hombres = $h_query * 100 / $genero_total;
      $mujeres = $m_query * 100 / $genero_total;
      $otros = $o_query * 100 / $genero_total;

      $datos_genero = array('hombres'=> $hombres, 'mujeres' => $mujeres,'otros' => $otros);

      return $datos_genero;

    }

    public function obtenerOcupacion(){
      //Query Ocupacion
      $o_estudiante = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','estudiante')->count();
      $o_empleado = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','empleado')->count();
      $o_independiente = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','independiente')->count();
      $o_desempleado= \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','desempleado')->count();
      $o_hogar = \DB::table('participaciones as participacion')->select('participacion.ocupacion')->where('participacion.ocupacion','hogar')->count();

      $ocupacion_total = $o_estudiante+$o_empleado+$o_independiente+$o_desempleado+$o_hogar;
      $estudiante = $o_estudiante * 100 / $ocupacion_total;
      $empleado = $o_empleado * 100 / $ocupacion_total;
      $independiente = $o_independiente * 100 / $ocupacion_total;
      $desempleado = $o_desempleado * 100 / $ocupacion_total;
      $hogar = $o_hogar * 100 / $ocupacion_total;

      $datos_ocupacion = array('estudiante'=> $estudiante, 'empleado' => $empleado,'independiente'=> $independiente, 'desempleado' => $desempleado,'hogar'=> $hogar);

      return $datos_ocupacion;
    }

    public function obtenerDiscapacidad(){
      //Query discapacidad
      $d_si = \DB::table('participaciones as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',1)->count();
      $d_no = \DB::table('participaciones as participacion')->select('participacion.discapacidad')->where('participacion.discapacidad',0)->count();
      $discapacidad_total = $d_si + $d_no;
      $discapacidad_si = $d_si * 100 / $discapacidad_total;
      $discapacidad_no = $d_no * 100 / $discapacidad_total;
      $datos_discapacidad = array('si'=> $discapacidad_si, 'no' => $discapacidad_no);
      return $datos_discapacidad;
    }

    public function obtenerNivelEducativo(){
      //Query Nivel Educativo
      $n_e_primaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','primaria')->count();
      $n_e_secundaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','secundaria')->count();
      $n_e_tecnica = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','tecnica')->count();
      $n_e_universitaria = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','universitaria')->count();
      $n_e_ninguna = \DB::table('participaciones as participacion')->select('participacion.nivel_educativo')->where('participacion.nivel_educativo','ninguna')->count();

      $nivel_educativo_total = $n_e_primaria + $n_e_secundaria + $n_e_tecnica + $n_e_universitaria + $n_e_ninguna;
      $primaria = $n_e_primaria * 100 / $nivel_educativo_total;
      $secundaria = $n_e_secundaria * 100 / $nivel_educativo_total;
      $tecnica = $n_e_tecnica * 100 / $nivel_educativo_total;
      $universitaria = $n_e_universitaria * 100 / $nivel_educativo_total;
      $ninguna = $n_e_ninguna * 100 / $nivel_educativo_total;
      $datos_nivel_educativo = array('primaria'=> $primaria, 'secundaria' => $secundaria,'tecnica' => $tecnica,'universitaria' => $universitaria,'ninguna' => $ninguna);

      return $datos_nivel_educativo;
    }

    public function obtenerRegimenSalud(){
      $count_subsidiado  = \DB::table('participaciones as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','subsidiado')->count();
      $count_contributivo  = \DB::table('participaciones as participacion')->select('participacion.regimen_salud')->where('participacion.regimen_salud','contributivo')->count();
      $regimen_salud_total = $count_subsidiado + $count_contributivo;
      $subsidiado = $count_subsidiado * 100 / $regimen_salud_total;
      $contributivo = $count_contributivo * 100 / $regimen_salud_total;
      $data = array('subsidiado'=> $subsidiado, 'contributivo' => $contributivo);

      return $data;
    }

    public function obtenerSector(){
      $count_rural  = \DB::table('participaciones as participacion')->select('participacion.sector')->where('participacion.sector',1)->count();
      $count_urbano  = \DB::table('participaciones as participacion')->select('participacion.sector')->where('participacion.sector',2)->count();
      $Sector_total = $count_rural + $count_urbano;
      $rural = $count_rural * 100 / $Sector_total;
      $urbano = $count_urbano * 100 / $Sector_total;
      $datos_sector = array('urbano'=> $urbano, 'rural' => $rural);

      return $datos_sector;
    }

    public function obtenerSalidoDepartamento(){
      $count_si  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_departamento')->where('participacion.ha_salido_departamento',1)->count();
      $count_no  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_departamento')->where('participacion.ha_salido_departamento',0)->count();
      $total_salido = $count_si + $count_no;
      $sisalido = $count_si * 100 / $total_salido;
      $nosalido = $count_no * 100 / $total_salido;
      $datos_salidos = array('sisalido'=> $sisalido, 'nosalido' => $nosalido);

      return $datos_salidos;
    }

    public function obtenerSalidoMunicipio(){
      $count_si_m  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_municipio')->where('participacion.ha_salido_municipio',1)->count();
      $count_no_m  = \DB::table('participaciones as participacion')->select('participacion.ha_salido_municipio')->where('participacion.ha_salido_municipio',0)->count();
      $total_salido = $count_si_m + $count_no_m;
      $sisalidom = $count_si_m * 100 / $total_salido;
      $nosalidom = $count_no_m * 100 / $total_salido;
      $datos_salidos_m = array('sisalidom'=> $sisalidom, 'nosalidom' => $nosalidom);

      return $datos_salidos_m;
    }

    public function obtenerActores(){
      $count_ninguno  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Ninguno')->count();
      $count_transporte  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Transporte y vías')->count();
      $count_infraestructura  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Infraestructura y servicios públicos')->count();
      $count_gremios  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Gremios')->count();
      $count_ambiente  = \DB::table('participaciones as participacion')->select('participacion.sector_pertenece')->where('participacion.sector_pertenece','Medio ambiente y desarrollo')->count();

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
      $count_material  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','material')->count();
      $count_palafitica  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','palafitica')->count();
      $count_bareque  = \DB::table('participaciones as participacion')->select('participacion.condiciones_fisicas')->where('participacion.condiciones_fisicas','bareque')->count();
      $total_condiciones = $count_material + $count_palafitica + $count_bareque;
      $material = $count_material * 100 / $total_condiciones;
      $palafitica = $count_palafitica * 100 / $total_condiciones;
      $bareque = $count_bareque * 100 / $total_condiciones;
      $datos_condiciones = array('material'=> $material, 'palafitica' => $palafitica, 'bareque' => $bareque);

      return $datos_condiciones;
    }

    public function obtenerViviendaEs(){
      $count_familiar  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','familiar')->count();
      $count_arrendada  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','arrendada')->count();
      $count_propia  = \DB::table('participaciones as participacion')->select('participacion.vivienda_es')->where('participacion.vivienda_es','propia')->count();
      $total_vivienda = $count_familiar + $count_arrendada + $count_propia;
      $familiar = $count_familiar * 100 / $total_vivienda;
      $arrendada = $count_arrendada * 100 / $total_vivienda;
      $propia = $count_propia * 100 / $total_vivienda;
      $datos_viviendas = array('familiar'=> $familiar, 'arrendada' => $arrendada, 'propia' => $propia);

      return $datos_viviendas;
    }

    public function obtenerServicios(){
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

    public function obtenerMunicipios(){
      //$count_otro  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','otro')->where('participacion.ubicacion_solucion_social','otro')->where('participacion.ubicacion_solucion_economico','otro')->count();
      $count_nechi  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','nechi')->orWhere('participacion.ubicacion_solucion_social','nechi')->orWhere('participacion.ubicacion_solucion_economico','nechi')->count();
      $count_achi  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','achi')->orWhere('participacion.ubicacion_solucion_social','achi')->orWhere('participacion.ubicacion_solucion_economico','achi')->count();
      $count_magangue  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','magangue')->orWhere('participacion.ubicacion_solucion_social','magangue')->orWhere('participacion.ubicacion_solucion_economico','magangue')->count();
      $count_san_jacinto_cauca  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','san-jacinto-cauca')->orWhere('participacion.ubicacion_solucion_social','san-jacinto-cauca')->orWhere('participacion.ubicacion_solucion_economico','san-jacinto-cauca')->count();
      $count_ayapel  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','ayapel')->orWhere('participacion.ubicacion_solucion_social','ayapel')->orWhere('participacion.ubicacion_solucion_economico','ayapel')->count();
      $count_caimito  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','caimito')->orWhere('participacion.ubicacion_solucion_social','caimito')->orWhere('participacion.ubicacion_solucion_economico','caimito')->count();
      $count_guaranda  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','guaranda')->orWhere('participacion.ubicacion_solucion_social','guaranda')->orWhere('participacion.ubicacion_solucion_economico','guaranda')->count();
      $count_majagual  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','majagual')->orWhere('participacion.ubicacion_solucion_social','majagual')->orWhere('participacion.ubicacion_solucion_economico','majagual')->count();
      $count_san_benito_abad  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','san-benito-abad')->orWhere('participacion.ubicacion_solucion_social','san-benito-abad')->orWhere('participacion.ubicacion_solucion_economico','san-benito-abad')->count();
      $count_san_marcos  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','san-marcos')->orWhere('participacion.ubicacion_solucion_social','san-marcos')->orWhere('participacion.ubicacion_solucion_economico','san-marcos')->count();
      $count_sucre  = \DB::table('participaciones as participacion')->select('participacion.id')->where('participacion.ubicacion_solucion_ambiental','sucre')->orWhere('participacion.ubicacion_solucion_social','sucre')->orWhere('participacion.ubicacion_solucion_economico','sucre')->count();


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
}
