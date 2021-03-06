<?php

namespace App\Http\Controllers;
use Validator;
use \App\Http\Requests\Frontend\FrontendRequest;
use Maatwebsite\Excel\Facades\Excel;
use \App\Participacion;
use \App\ParticipacionRecoleccion;
use \App\ConsultaRecoleccion;
use DB;


class RecoleccionController extends Controller
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
   public function answers(){

     $consulta = new ConsultaRecoleccion();
     $datos_genero = $consulta->obtenerGenero('general');
     $datos_ocupacion = $consulta->obtenerOcupacion('general');
     $datos_discapacidad = $consulta->obtenerDiscapacidad('general');
     $datos_nivel_educativo = $consulta->obtenerNivelEducativo('general');
     $datos_sector = $consulta->obtenerSector('general');
     $datos_dimensiones = $consulta->obtenerQuestions('general');
     $datos_servicios = $consulta->obtenerServicios('general');
     $option_url = 'general';



     return view('frontend.recoleccion.index')
            ->with('datos_genero',$datos_genero)
            ->with('datos_ocupacion',$datos_ocupacion)
            ->with('datos_discapacidad',$datos_discapacidad)
            ->with('datos_nivel_educativo',$datos_nivel_educativo)
            ->with('datos_sector',$datos_sector)
            ->with('datos_dimensiones',$datos_dimensiones)
            ->with('option_url',$option_url)
            ->with('datos_servicios',$datos_servicios);

   }



   /*Request Ajax Respuestas */
   public function dataResponse($option,$data){
     $consulta = new ConsultaRecoleccion();
     if($option == "regimen-salud"){
       $data = $consulta->obtenerRegimenSalud($data);
     }else if($option == "han-salido"){
       $data = $consulta->obtenerSalidoDepartamento($data);
     }else if($option == "han-salido-m"){
       $data = $consulta->obtenerSalidoMunicipio($data);
     }else if($option == "actores"){
       $data = $consulta->obtenerActores($data);
     }else if($option == "condiciones-fisicas"){
       $data = $consulta->obtenerCondicionesFisicas($data);
     }else if($option == "vivienda-es"){
       $data = $consulta->obtenerViviendaEs($data);
     }else if($option == "municipios"){
       $data = $consulta->obtenerMunicipios();
     }else if($option == "estado-general"){
       $data = $consulta->obtenerQuestions($data);
     }else if($option == "sector-pertenece"){
       $data = $consulta->obtenerSectorPertenece($data);
     }else if($option == "edades"){
       $data = $consulta->obtenerEdades($data);
     }else if($option == "situacion-desplazamiento"){
       $data = $consulta->obtenerSituacionDesplazamiento($data);
     }else if($option == "tiempo-residencia"){
       $data = $consulta->obtenerTiempoResidencia($data);
     }
     //Mapas
     else if($option == "mapa-ambiental"){
       $data = $consulta->obtenerMapaAmbiental();
     }
     else if($option == "mapa-economico"){
       $data = $consulta->obtenerMapaEconomico();
     }
     else if($option == "mapa-social"){
       $data = $consulta->obtenerMapaSocial();
     }
     else if($option == "mapa-general"){
       $data = $consulta->obtenerMapaGeneral();
     }



     else{
       $data = "none";
     }

     return $data;
   }

   public function dataResponseMunicipio($option,$data){
     $consulta = new ConsultaRecoleccion();
     if($option == "regimen-salud"){
       $data = $consulta->obtenerRegimenSalud($data);
     }else if($option == "han-salido"){
       $data = $consulta->obtenerSalidoDepartamento($data);
     }else if($option == "han-salido-m"){
       $data = $consulta->obtenerSalidoMunicipio($data);
     }else if($option == "actores"){
       $data = $consulta->obtenerActores($data);
     }else if($option == "condiciones-fisicas"){
       $data = $consulta->obtenerCondicionesFisicas($data);
     }else if($option == "vivienda-es"){
       $data = $consulta->obtenerViviendaEs($data);
     }else if($option == "municipios"){
       $data = $consulta->obtenerMunicipios($data);
     }else if($option == "estado-general"){
       $data = $consulta->obtenerQuestions($data);
     }else if($option == "sector-pertenece"){
       $data = $consulta->obtenerSectorPertenece($data);
     }else if($option == "edades"){
       $data = $consulta->obtenerEdades($data);
     }else if($option == "situacion-desplazamiento"){
       $data = $consulta->obtenerSituacionDesplazamiento($data);
     }else if($option == "tiempo-residencia"){
       $data = $consulta->obtenerTiempoResidencia($data);
     }
     //Mapas
     else if($option == "mapa-ambiental"){
       $data = $consulta->obtenerMapaAmbiental();
     }
     else if($option == "mapa-economico"){
       $data = $consulta->obtenerMapaEconomico();
     }
     else if($option == "mapa-social"){
       $data = $consulta->obtenerMapaSocial();
     }
     else if($option == "mapa-general"){
       $data = $consulta->obtenerMapaGeneral();
     }
     else{
       $data = "none";
     }

     return $data;
   }

   function getMunicipio(FrontendRequest $request){
     $municipio = $request->municipio;
    if($municipio == "Todos"){
       $option_url = "general";
     }else if($municipio == "Achi"){
       $option_url = $municipio;
     }else if($municipio == "Caimito"){
       $option_url = $municipio;
     }else if($municipio == "Guaranda"){
       $option_url = $municipio;
     }else if($municipio == "Magangue"){
       $option_url = $municipio;
     }else if($municipio == "Nechi"){
       $option_url = $municipio;
     }else if($municipio == "San Jacinto del Cauca"){
       $option_url = "San Jacinto del Cauca";
     }else if($municipio == "San Marcos"){
       $option_url = "San Marcos";
     }else if($municipio == "ayapel"){
       $option_url = "Ayapel";
     }else if($municipio == "sucre"){
       $option_url = "Sucre";
     }else if($municipio == "San Benito Abad"){
       $option_url = "San Benito Abad";
     }else if($municipio == "Majagual"){
       $option_url = "Majagual";
     }



     if($municipio == 'Todos'){
       return redirect('datos');
     }
     $consulta = new ConsultaRecoleccion();
     $datos_genero = $consulta->obtenerGenero($municipio);
     $datos_ocupacion = $consulta->obtenerOcupacion($municipio);
     $datos_discapacidad = $consulta->obtenerDiscapacidad($municipio);
     $datos_nivel_educativo = $consulta->obtenerNivelEducativo($municipio);
     $datos_sector = $consulta->obtenerSector($municipio);
     $datos_servicios = $consulta->obtenerServicios($municipio);
     $datos_dimensiones = $consulta->obtenerQuestions($municipio);

     return view('frontend.recoleccion.index')
            ->with('datos_genero',$datos_genero)
            ->with('datos_ocupacion',$datos_ocupacion)
            ->with('datos_discapacidad',$datos_discapacidad)
            ->with('datos_nivel_educativo',$datos_nivel_educativo)
            ->with('datos_sector',$datos_sector)
            ->with('datos_dimensiones',$datos_dimensiones)
            ->with('option_url',$option_url)
            ->with('datos_servicios',$datos_servicios);


   }


}
