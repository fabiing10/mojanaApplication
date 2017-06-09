<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use \App\Http\Requests\Frontend\FrontendRequest;
use \App\Indicador;
use \App\Variable;
use \App\TemaProblematica;
use \App\Solucion;
use \App\Problematica;
/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

      $query = \DB::table('variables as variable')
          ->join('indicadores as indicador', 'variable.indicador_id', '=', 'indicador.id')
          ->select('variable.id','indicador.id as indicador_id','indicador.nombre','indicador.mapa','variable.categoria','variable.sub_categoria','variable.dimension','variable.clasificacion','variable.nechi','variable.achi','variable.magangue','variable.san_jacinto','variable.ayapel','variable.caimito','variable.guaranda','variable.majagual','variable.san_benito_abad','variable.san_marcos','variable.sucre','variable.regional','variable.mapa_url','variable.documento_url')
          ->orderBy('variable.id','asc')
          ->get();
      return view('frontend.user.dashboard')->with('query', $query);

    }

    public function uploadMapa(FrontendRequest $request){

      $indicador = $request->indicador_value;
      $imageName = time().'.'.$request->mapa->getClientOriginalExtension();
      $request->mapa->move(public_path('img/uploads'), $imageName);
      $variable = Variable::find($indicador);
      $indicador_id = $variable->indicador_id;
      $variable->mapa_url = $imageName;
      $variable->save();

      $indicador = Indicador::find($indicador_id);
      $indicador->mapa = true;
      $indicador->save();
     	return back()->with('success','Image Uploaded successfully.');

    }
    public function uploadDocument(FrontendRequest $request){
      $indicador = $request->indicador_value;
      $documentName = time().'.'.$request->documento->getClientOriginalExtension();
      $request->documento->move(public_path('img/documents'), $documentName);
      $variable = Variable::find($indicador);
      $indicador_id = $variable->indicador_id;
      $variable->documento_url = $documentName;
      $variable->save();

      $indicador = Indicador::find($indicador_id);
      $indicador->documento = true;
      $indicador->save();
     	return back()->with('success','Image Uploaded successfully.');
    }
    public function homeProblematicas(){

      $tematicas = TemaProblematica::all();
      $problematicas = \DB::table('temas_problematicas as tp')
          ->join('problematicas as p', 'tp.id', '=', 'p.tema_problematica_id')
          ->select('p.id','p.nombre as problematica','tp.nombre as TemaProblematica')
          ->get();
      $soluciones = \DB::table('temas_problematicas as tp')
          ->join('problematicas as p', 'tp.id', '=', 'p.tema_problematica_id')
          ->join('soluciones as s', 'p.id', '=', 's.problematica_id')
          ->select('p.id','p.nombre as Problematica','tp.nombre as TemaProblematica','s.nombre as Solucion')
          ->get();

      return view('backend.problematicas.create')
              ->with('tematicas',$tematicas)
              ->with('problematicas',$problematicas)
              ->with('soluciones',$soluciones);

    }

    public function problematicaByTema($id){
      $problematicas = Problematica::where('tema_problematica_id','=',$id)->get();
      return $problematicas;
    }
    public function SolucionByTema($id){
      $soluciones = Solucion::where('problematica_id','=',$id)->get();
      return $soluciones;
    }
    public function saveTemas(FrontendRequest $request){
      $tematicas = new TemaProblematica();
      $tematicas->nombre = $request->nombre_tematica;
      $tematicas->save();

      return redirect('problematicas');

    }
    public function saveProblematica(FrontendRequest $request){
      $problema = new Problematica();
      $problema->tema_problematica_id = $request->tema_id;
      $problema->nombre = $request->nombre_problema;
      $problema->save();
      return redirect('problematicas');

    }
    public function saveSolucion(FrontendRequest $request){
      $solucion = new Solucion();
      $solucion->problematica_id = $request->problematica_id;
      $solucion->nombre = $request->nombre_solucion;
      $solucion->save();
      return redirect('problematicas');
    }
}
