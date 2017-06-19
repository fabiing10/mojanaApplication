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
}
