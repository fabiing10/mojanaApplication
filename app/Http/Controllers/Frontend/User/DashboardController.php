<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;

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
          ->select('variable.id','indicador.id as indicador_id','indicador.nombre','indicador.mapa','variable.categoria','variable.sub_categoria','variable.dimension','variable.clasificacion','variable.nechi','variable.achi','variable.magangue','variable.san_jacinto','variable.ayapel','variable.caimito','variable.guaranda','variable.majagual','variable.san_benito_abad','variable.san_marcos','variable.sucre','variable.regional')
          ->orderBy('variable.id', 'asc')
          ->get();
      //return $query;
      return view('frontend.user.dashboard')->with('query',$query);
    }
}
