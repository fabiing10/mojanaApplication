<?php




namespace App\Http\Controllers;
use Validator;
use \App\Http\Requests\Frontend\FrontendRequest;
use Maatwebsite\Excel\Facades\Excel;
use \App\Participacion;
use \App\ParticipacionRecoleccion;
use \App\Consulta;
use DB;
use PDF;
use GrabzItClient,GrabzItPDFOptions;


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

     public function dataRedirect(FrontendRequest $request){
       $option = $request->municipio;
       return redirect()->route('resultados', ['options' => $option]);

     }
     public function answers($option){

       $consulta = new Consulta();
       $datos_genero = $consulta->obtenerGenero($option);
       $datos_ocupacion = $consulta->obtenerOcupacion($option);
       $datos_discapacidad = $consulta->obtenerDiscapacidad($option);
       $datos_nivel_educativo = $consulta->obtenerNivelEducativo($option);
       $datos_sector = $consulta->obtenerSector($option);
       $datos_servicios = $consulta->obtenerServicios($option);
       $datos_suelo = $consulta->obtenerSuelo($option);


      $d_v_ambientales = $consulta->obtenerVariablesAmbientales($option);
      $d_v_sociales = $consulta->obtenerVariablesSocial($option);
      $d_v_economicas = $consulta->obtenerVariablesEconomicas($option);


      /*Mapas*/
      $m_ambientales = $consulta->obtenerCountMunicipiosAmbientales();
      $m_sociales = $consulta->obtenerCountMunicipiosSociales();
      $m_economicas = $consulta->obtenerCountMunicipiosEconomicos();

       return view('frontend.resultados.index')
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
              ->with('m_economicas',$m_economicas)
              ->with('option_url',$option);


     }

     public function answersPDFTemplate($option){

       $consulta = new Consulta();
       $datos_genero = $consulta->obtenerGenero($option);
       $datos_ocupacion = $consulta->obtenerOcupacion($option);
       $datos_discapacidad = $consulta->obtenerDiscapacidad($option);
       $datos_nivel_educativo = $consulta->obtenerNivelEducativo($option);
       $datos_sector = $consulta->obtenerSector($option);
       $datos_servicios = $consulta->obtenerServicios($option);
       $datos_suelo = $consulta->obtenerSuelo($option);


      $d_v_ambientales = $consulta->obtenerVariablesAmbientales($option);
      $d_v_sociales = $consulta->obtenerVariablesSocial($option);
      $d_v_economicas = $consulta->obtenerVariablesEconomicas($option);


      /*Mapas*/
      $m_ambientales = $consulta->obtenerCountMunicipiosAmbientales();
      $m_sociales = $consulta->obtenerCountMunicipiosSociales();
      $m_economicas = $consulta->obtenerCountMunicipiosEconomicos();

       return view('frontend.resultados.pdf')
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
              ->with('m_economicas',$m_economicas)
              ->with('option_url',$option);


     }

     public function answersPDF($data){

       $url = "http://app.regionmojana.com/resultados/pdf/".$data;
       $filepath = "data-".$data.".pdf";
       include( public_path().'/../vendor/grabzit/grabzit/lib/GrabzItClient.class.php');

        try{

            $grabzIt = new GrabzItClient("MjFhOGI4M2JjMzdkNGI4MDk2ZGNhMWMzYjg2NmIzM2U=", "PwARJ2N/Pz9mPw8/Pz8/TT81Pz90Qj93BRo/QD86fz8=");
            $options = new GrabzItPDFOptions();
            $options->setDelay(25000);
            $options->setMarginTop(0);
            $options->setMarginLeft(5);
            $options->setMarginBottom(0);
            $options->setMarginRight(5);
            $options->setPageSize("A5");
            $options->setIncludeOutline(false);
            $grabzIt->URLToPDF($url,$options);
            $grabzIt->SaveTo(public_path().'/img/uploads/data/'.$filepath);
            //return $grabzIt;
        }catch(GrabzItException $e){

          if ($e->getCode() == GrabzItException::PARAMETER_NO_URL)
          {
              //Please enter a URL
          }
        }

        return redirect('/img/uploads/data/'.$filepath);
     }

     public function handlerPDF(FrontendRequest $request){
       include( public_path().'/../vendor/grabzit/grabzit/lib/GrabzItClient.class.php');


       //This PHP file handles the GrabzIt callback

       $message = $request->message;
       $customId = $request->customid;
       $id = $request->id;
       $filename = $request->filename;
       $format = $request->format;

       //Custom id can be used to store user ids or whatever is needed for the later processing of the
       //resulting screenshot

       $grabzIt = new GrabzItClient("MjFhOGI4M2JjMzdkNGI4MDk2ZGNhMWMzYjg2NmIzM2U=", "PwARJ2N/Pz9mPw8/Pz8/TT81Pz90Qj93BRo/QD86fz8=");
       $result = $grabzIt->GetResult($id);
       //Ensure that the application has the correct rights for this directory.
       file_put_contents("results" . public_path().'img/uploads/data/' . $filename, $result);
      return $result;


     }

     public function save(FrontendRequest $request){
       /*
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
        */
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
        $participacion->nivel_educativo = $request->nivel_educativo;
        $participacion->situacion_dezplazamiento_conflicto = $request->situacion_dezplazamiento_conflicto;
        $participacion->sector_pertenece = $request->sector_pertenece;
        $participacion->estrato_socio_economico = $request->estrato_socio_economico;

        $participacion->rutas_movilidad = $request->rutas_movilidad;
        $participacion->como_movilizan_personas = $request->como_movilizan_personas;
        $participacion->requerimientos_movilidad = $request->requerimientos_movilidad;
        $participacion->como_movilizan_mercancias = $request->como_movilizan_mercancias;
        $participacion->principal_problematica = $request->principal_problematica;
        $participacion->posibles_soluciones = $request->posibles_soluciones;
        $participacion->infraestructura_con_cuenta = $request->infraestructura_con_cuenta;
        $participacion->infraestructura_necesaria = $request->infraestructura_necesaria;
        $participacion->recursos = $request->recursos;
        $participacion->limitantes = $request->limitantes;
        $participacion->gremio_pertenece = $request->gremio_pertenece;
        $participacion->vienen_sus_insumos = $request->vienen_sus_insumos;
        $participacion->procesos_realiza = $request->procesos_realiza;
        $participacion->comercializa_productos = $request->comercializa_productos;
        $participacion->requerimientos_infraestructura = $request->requerimientos_infraestructura;
        $participacion->requerimientos_tecnologia = $request->requerimientos_tecnologia;
        $participacion->bienes_servicios_municipio = $request->bienes_servicios_municipio;
        $participacion->aprovechan_bienes_servicios_municipio = $request->aprovechan_bienes_servicios_municipio;
        $participacion->alternativas_aprovechamiento_naturaleza = $request->alternativas_aprovechamiento_naturaleza;
        $participacion->problematicas_aprovechamiento_naturaleza = $request->problematicas_aprovechamiento_naturaleza;
        $participacion->armonia_naturaleza = $request->armonia_naturaleza;
        $participacion->recuperacion_complejos_cenagosos = $request->recuperacion_complejos_cenagosos;

        $participacion->municipio_residencia = $request->municipio_residencia;
        $participacion->comuna_barrio_vereda = $request->comuna_barrio_vereda;
        $participacion->sector = $request->sector;
        $participacion->tiempo_residencia = $request->tiempo_residencia;
        $participacion->ha_salido_departamento = $request->ha_salido_departamento;
        $participacion->ha_salido_municipio = $request->ha_salido_municipio;

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

        $participacion->condiciones_fisicas = $request->condiciones_fisicas;
        $participacion->vivienda_es = $request->vivienda_es;
        $participacion->vivienda_cuenta_agua_potable = $request->vivienda_cuenta_agua_potable;
        $participacion->vivienda_cuenta_alcantarillado = $request->vivienda_cuenta_alcantarillado;
        $participacion->vivienda_cuenta_energia = $request->vivienda_cuenta_energia;
        $participacion->vivienda_cuenta_gas = $request->vivienda_cuenta_gas;
        $participacion->vivienda_cuenta_recoleccion_basura = $request->vivienda_cuenta_recoleccion_basura;

        $participacion->ms_vivienda = $request->ms_vivienda;
        $participacion->ms_comercio = $request->ms_comercio;
        $participacion->ms_conservacion = $request->ms_conservacion;
        $participacion->ms_proteccion = $request->ms_proteccion;
        $participacion->ms_agricultura = $request->ms_agricultura;
        $participacion->ms_ganaderia = $request->ms_ganaderia;
        $participacion->ms_mineria = $request->ms_mineria;
        $participacion->ms_industria = $request->ms_industria;
        $participacion->ms_vias = $request->ms_vias;

        $participacion->ubicacion_solucion_ambiental = $request->ubicacion_solucion_ambiental;
        $participacion->tema_problematica_ambiental = $request->tema_problematica_ambiental;
        $participacion->problematica_ambiental = $request->problematica_ambiental;
        $participacion->solucion_ambiental = $request->solucion_ambiental;
        $participacion->ubicacion_solucion_social = $request->ubicacion_solucion_social;
        $participacion->tema_problematica_social = $request->tema_problematica_social;
        $participacion->problematica_social = $request->problematica_social;
        $participacion->solucion_social = $request->solucion_social;
        $participacion->ubicacion_solucion_economico = $request->ubicacion_solucion_economico;
        $participacion->tema_problematica_economico = $request->tema_problematica_economico;
        $participacion->problematica_economico = $request->problematica_economico;
        $participacion->solucion_economico = $request->solucion_economico;



        //Ubicaciones Ambiental
        $participacion->ubicacion_latitud_ambiental = $request->ubicacion_latitud_ambiental;
        $participacion->ubicacion_longitud_ambiental = $request->ubicacion_longitud_ambiental;

        //Ubicaciones Social
        $participacion->ubicacion_latitud_social = $request->ubicacion_latitud_social;
        $participacion->ubicacion_longitud_social = $request->ubicacion_longitud_social;

        //Ubicaciones economico
        $participacion->ubicacion_latitud_economico = $request->ubicacion_latitud_economico;
        $participacion->ubicacion_longitud_economico = $request->ubicacion_longitud_economico;

        $participacion->save();


        return redirect('participacion/reporte');


     }

     public function participacion(){
       return view('frontend.participacion.success');
     }

     /*Request Ajax Respuestas */
     public function dataResponse($option,$data){
       $consulta = new Consulta();
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

     public function excelRecoleccion($archivo){

         Excel::load($archivo.'.xlsx', function($reader) {

           // reader methods
           //$results = $reader->first();
           //$info = serialize($results['variables']);
           //return var_dump($results['variables']);
           //return $results->variables;
            $this->i = 0;

           $reader->each(function($sheet) {


                    /*$sheet->each(function($row) {

                    });*/

                    $participacion = new ParticipacionRecoleccion;
                    $participacion->tipo_identificacion = $sheet->tipo_identificacion;
                    $participacion->identificacion = $sheet->identificacion;
                    $participacion->nombres_apellidos =  $sheet->nombres_apellidos;
                    $participacion->edad = $sheet->edad;
                    $participacion->genero = $sheet->genero;
                    $participacion->regimen_salud = $sheet->regimen_salud;
                    $participacion->ocupacion = $sheet->ocupacion;
                    $participacion->grupo_etnico = $sheet->grupo_etnico;

                    $participacion->discapacidad = $sheet->discapacidad;
                    $participacion->nivel_educativo = $sheet->nivel_educativo;
                    $participacion->situacion_dezplazamiento_conflicto = $sheet->situacion_dezplazamiento_conflicto;
                    $participacion->sector = $sheet->sector;
                    $participacion->estrato_socio_economico = $sheet->estrato_socio_economico;
                    $participacion->tiempo_residencia = $sheet->tiempo_residencia;
                    $participacion->ha_salido_departamento = $sheet->ha_salido_departamento;
                    $participacion->ha_salido_municipio = $sheet->ha_salido_municipio;
                    $participacion->municipio_residencia = $sheet->municipio_residencia;


                      $participacion->Q_01 = $sheet->qa;

                      $participacion->Q_02 = $sheet->qb;

                      $participacion->Q_03 = $sheet->qc;

                      $participacion->Q_04 = $sheet->qd;

                      $participacion->Q_05 = $sheet->qe;

                      $participacion->Q_06 = $sheet->qf;

                      $participacion->Q_07 = $sheet->qg;

                      $participacion->Q_08 = $sheet->qh;

                      $participacion->Q_09 = $sheet->qi;

                      $participacion->Q_10 = $sheet->qj;

                      $participacion->Q_11 = $sheet->qk;

                      $participacion->Q_12 = $sheet->ql;

                      $participacion->Q_13 = $sheet->qm;

                      $participacion->Q_14 = $sheet->qn;

                      $participacion->Q_15 = $sheet->qo;

                      $participacion->Q_16 = $sheet->qp;

                      $participacion->Q_17 = $sheet->qq;

                      $participacion->Q_18 = $sheet->qr;

                      $participacion->Q_19 = $sheet->qs;

                      $participacion->Q_20 = $sheet->qt;

                      $participacion->Q_21 = $sheet->qu;


                    $participacion->condiciones_fisicas = strtolower($sheet->condiciones_fisicas);
                    $participacion->vivienda_es = strtolower($sheet->vivienda_es);
                    $participacion->vivienda_cuenta_agua_potable = strtolower($sheet->vivienda_cuenta_agua_potable);
                    $participacion->vivienda_cuenta_alcantarillado = strtolower($sheet->vivienda_cuenta_alcantarillado);
                    $participacion->vivienda_cuenta_energia = strtolower($sheet->vivienda_cuenta_energia);
                    $participacion->vivienda_cuenta_gas = strtolower($sheet->vivienda_cuenta_gas);
                    $participacion->vivienda_cuenta_recoleccion_basura = strtolower($sheet->vivienda_cuenta_recoleccion_basura);

                    $participacion->ms_vivienda = $sheet->ms_vivienda;
                    $participacion->ms_comercio = $sheet->ms_comercio;
                    $participacion->ms_conservacion = $sheet->ms_conservacion;
                    $participacion->ms_proteccion = $sheet->ms_proteccion;
                    $participacion->ms_agricultura = $sheet->ms_agricultura;
                    $participacion->ms_ganaderia = $sheet->ms_ganaderia;
                    $participacion->ms_mineria = $sheet->ms_mineria;
                    $participacion->ms_industria = $sheet->ms_industria;
                    $participacion->ms_vias = $sheet->ms_vias;


                    /*
                    $participacion->mas_suelo_para = $request->mas_suelo_para;
                    $participacion->ubicacion_solucion_ambiental = $request->ubicacion_solucion_ambiental;
                    $participacion->tema_problematica_ambiental = $request->tema_problematica_ambiental;
                    $participacion->problematica_ambiental = $request->problematica_ambiental;
                    $participacion->solucion_ambiental = $request->solucion_ambiental;
                    $participacion->ubicacion_solucion_social = $request->ubicacion_solucion_social;
                    $participacion->tema_problematica_social = $request->tema_problematica_social;
                    $participacion->problematica_social = $request->problematica_social;
                    $participacion->solucion_social = $request->solucion_social;
                    $participacion->ubicacion_solucion_economico = $request->ubicacion_solucion_economico;
                    $participacion->tema_problematica_economico = $request->tema_problematica_economico;
                    $participacion->problematica_economico = $request->problematica_economico;
                    $participacion->solucion_economico = $request->solucion_economico;
                    */
                    $participacion->save();


          });

       });

     }

}
