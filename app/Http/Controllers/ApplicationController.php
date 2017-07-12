<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use \App\Indicador;
use \App\Variable;
use \App\TemaProblematica;
use \App\Solucion;
use \App\Problematica;
use \App\ParticipacionRecoleccion;
use \App\ConsultaRecoleccion;

/**
 * Class LanguageController.
 */
class ApplicationController extends Controller
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

     public function leerExceld(){

       $indicadores =  Indicador::where('nombre', $row->variables)->count();
       return $indicadores;

     }
     public function showFilePdf($pdf){

       $fileName = public_path().'/img/documents/'.$pdf;
       $response = Response::make($fileName, 200);
        $response->header('Content-Type','application/pdf');
        $response->header('Content-Disposition','inline');
        $response->header('Content-Transfer-Encoding','binary');

        return $response;

       /*return response()->file($fileName, [
          'Content-Disposition' => 'inline; filename="'. $pdf .'"'
        ]);*/
     }
     public function leerExcel(){
       Excel::load('data_filter_map.xls', function($reader) {

         // reader methods
         //$results = $reader->first();
         //$info = serialize($results['variables']);
         //return var_dump($results['variables']);
         //return $results->variables;
          $this->i = 0;
         $reader->each(function($sheet) {
            /*$sheet->each(function($row) {

            });*/

            $indicador = Indicador::where('nombre', $sheet->variables)->count();
            if($indicador>0){
              $data = Indicador::where('nombre', $sheet->variables)->take(1)->get();
              foreach ($data as $indicador) {
                  $this->id = $indicador->id;
                  $this->nombre = $indicador->nombre;
              }
              $variable = new Variable;
              $variable->indicador_id = $this->id;
              $variable->categoria = $sheet->categorias;
              $variable->sub_categoria = $sheet->sub_categorias;
              $variable->dimension = $sheet->dimension;
              $variable->clasificacion = $sheet->clasificacion;
              $variable->nechi = $sheet->nechi;
              $variable->achi = $sheet->achi;
              $variable->magangue = $sheet->magangue;
              $variable->san_jacinto = $sheet->san_jacinto_cauca;
              $variable->ayapel = $sheet->ayapel;
              $variable->caimito = $sheet->caimito;
              $variable->guaranda = $sheet->guaranda;
              $variable->majagual = $sheet->majagual;
              $variable->san_benito_abad = $sheet->san_benito_abad;
              $variable->san_marcos = $sheet->san_marcos;
              $variable->sucre = $sheet->sucre;
              $variable->regional = $sheet->regional;
              $variable->save();
            }else{
              $indicador = new Indicador;
              $indicador->nombre = $sheet->variables;
              $indicador->mapa = false;
              $indicador->save();
              $variable = new Variable;
              $variable->indicador_id = $indicador->id;
              $variable->categoria = $sheet->categorias;
              $variable->sub_categoria = $sheet->sub_categorias;
              $variable->dimension = $sheet->dimension;
              $variable->clasificacion = $sheet->clasificacion;
              $variable->nechi = $sheet->nechi;
              $variable->achi = $sheet->achi;
              $variable->magangue = $sheet->magangue;
              $variable->san_jacinto = $sheet->san_jacinto_cauca;
              $variable->ayapel = $sheet->ayapel;
              $variable->caimito = $sheet->caimito;
              $variable->guaranda = $sheet->guaranda;
              $variable->majagual = $sheet->majagual;
              $variable->san_benito_abad = $sheet->san_benito_abad;
              $variable->san_marcos = $sheet->san_marcos;
              $variable->sucre = $sheet->sucre;
              $variable->regional = $sheet->regional;
              $variable->save();
            }

        });

     });
     }

     public function ListIndicadoresByCode($code){
       $code = explode("-", $code);
       $dimension = $code[0];
       $clasificacion = $code[1];


       if($clasificacion == 1){
         $this->clasificacion = "Suelo";
       }else if($clasificacion == 2){
         $this->clasificacion = "Estructura Ecologica Principal";
       }else if($clasificacion == 3){
         $this->clasificacion = "Transporte y Movilidad";
       }else if($clasificacion == 4){
         $this->clasificacion = "Servicios publicos";
       }else if($clasificacion == 5){
         $this->clasificacion = "Espacio Publico";
       }else if($clasificacion == 6){
         $this->clasificacion = "Edificaciones";
       }else{
         $this->clasificacion = "";
       }

       if($dimension == "A"){
         $this->dimension = "Ambiental";
       }else if($dimension == "S"){
         $this->dimension = "Social";
       }else{
         $this->dimension = "Economico";
       }

       $query = \DB::table('variables as variable')
           ->join('indicadores as indicador', 'variable.indicador_id', '=', 'indicador.id')
           ->select('variable.id','indicador.nombre','indicador.documento','indicador.mapa','variable.categoria','variable.sub_categoria','variable.dimension','variable.clasificacion','variable.nechi','variable.achi','variable.magangue','variable.san_jacinto','variable.ayapel','variable.caimito','variable.guaranda','variable.majagual','variable.san_benito_abad','variable.san_marcos','variable.sucre','variable.regional')
           ->where('variable.dimension', '=', $this->dimension)
           ->where('variable.clasificacion', '=', $this->clasificacion)
           ->get();


       return $query;
     }

     public function GraficosIndicadoresId($id){
       $query = \DB::table('variables as variable')
           ->join('indicadores as indicador', 'variable.indicador_id', '=', 'indicador.id')
           ->select('indicador.nombre','variable.nechi','variable.achi','variable.magangue','variable.san_jacinto','variable.ayapel','variable.caimito','variable.guaranda','variable.majagual','variable.san_benito_abad','variable.san_marcos','variable.sucre','variable.regional')
           ->where('variable.id', '=', $id)
           ->get();
       return $query;
     }

     public function DocumentoIndicadoresByCode($id){
       $query = \DB::table('variables as variable')
           ->join('indicadores as indicador', 'variable.indicador_id', '=', 'indicador.id')
           ->select('variable.documento_url')
           ->where('variable.id', '=', $id)
           ->get();
       return $query;
     }

     public function MapaIndicadoresByCode($id){
       $query = \DB::table('variables as variable')
           ->join('indicadores as indicador', 'variable.indicador_id', '=', 'indicador.id')
           ->select('variable.mapa_url')
           ->where('variable.id', '=', $id)
           ->get();
       return $query;
     }
     public function solucionByProblema($id){
       $soluciones = Solucion::where('problematica_id','=',$id)->get();
       return $soluciones;
     }
     public function loadTemasByClasificacion($option){
       $temas = \DB::table('temas_problematicas as tp')
           ->select('tp.*')
           ->where('tp.clasificacion','=',$option)
           ->get();
       return $temas;
     }
     public function problematicaByTema($id){
       $problematicas = Problematica::where('tema_problematica_id','=',$id)->get();
       return $problematicas;
     }



     public function answers(){

       $consulta = new ConsultaRecoleccion();
       $datos_genero = $consulta->obtenerGenero();
       $datos_ocupacion = $consulta->obtenerOcupacion();
       $datos_discapacidad = $consulta->obtenerDiscapacidad();
       $datos_nivel_educativo = $consulta->obtenerNivelEducativo();
       $datos_sector = $consulta->obtenerSector();
       $datos_servicios = $consulta->obtenerServicios();
       $datos_suelo = $consulta->obtenerSuelo();


       $d_v_ambientales = $consulta->obtenerVariablesAmbientales();
      $d_v_sociales = $consulta->obtenerVariablesSocial();
      $d_v_economicas = $consulta->obtenerVariablesEconomicas();


      /*Mapas*/
      $m_ambientales = $consulta->obtenerCountMunicipiosAmbientales();
      $m_sociales = $consulta->obtenerCountMunicipiosSociales();
      $m_economicas = $consulta->obtenerCountMunicipiosEconomicos();

       return view('frontend.recoleccion.index')
              ->with('datos_genero',$datos_genero)
              ->with('datos_ocupacion',$datos_ocupacion)
              ->with('datos_discapacidad',$datos_discapacidad)
              ->with('datos_nivel_educativo',$datos_nivel_educativo)
              ->with('datos_sector',$datos_sector)
              ->with('datos_servicios',$datos_servicios)
              ->with('datos_suelo',$datos_suelo)
              ->with('d_v_ambientales',$d_v_ambientales)
              ->with('d_v_sociales',$d_v_sociales)
              ->with('d_v_economicas',$d_v_economicas)
              ->with('m_ambientales',$m_ambientales)
              ->with('m_sociales',$m_sociales)
              ->with('m_economicas',$m_economicas);

     }


     /*Request Ajax Respuestas */
     public function dataResponse($option){
       $consulta = new Consulta();
       if($option == "regimen-salud"){
         $data = $consulta->obtenerRegimenSalud();
       }else if($option == "han-salido"){
         $data = $consulta->obtenerSalidoDepartamento();
       }else if($option == "han-salido-m"){
         $data = $consulta->obtenerSalidoMunicipio();
       }else if($option == "actores"){
         $data = $consulta->obtenerActores();
       }else if($option == "condiciones-fisicas"){
         $data = $consulta->obtenerCondicionesFisicas();
       }else if($option == "vivienda-es"){
         $data = $consulta->obtenerViviendaEs();
       }else if($option == "municipios"){
         $data = $consulta->obtenerMunicipios();
       }else if($option == "estado-general"){
         $data = $consulta->obtenerQuestions();
       }else if($option == "sector-pertenece"){
         $data = $consulta->obtenerSectorPertenece();
       }else if($option == "edades"){
         $data = $consulta->obtenerEdades();
       }else if($option == "situacion-desplazamiento"){
         $data = $consulta->obtenerSituacionDesplazamiento();
       }else if($option == "tiempo-residencia"){
         $data = $consulta->obtenerTiempoResidencia();
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

}
