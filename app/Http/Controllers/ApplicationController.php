<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use \App\Indicador;
use \App\Variable;

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
           ->select('*')
           ->where('variable.dimension', '=', $this->dimension)
           ->where('variable.clasificacion', '=', $this->clasificacion)
           ->get();


       return $query;
     }
}
