<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use \App\Http\Requests\Frontend\FrontendRequest;
use \App\Indicador;
use \App\Variable;
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
}
