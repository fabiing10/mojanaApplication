<?php




namespace App\Http\Controllers;
use Validator;
use \App\Http\Requests\Frontend\FrontendRequest;

use Maatwebsite\Excel\Facades\Excel;
use \App\Participacion;

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

     public function save(FrontendRequest $request){

       $validator = Validator::make($request->all(), [
            'nombres_apellidos' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/participacion/nuevo')
                        ->withErrors($validator)
                        ->withInput();
        }

        $participacion = new Participacion;
        $participacion->nombres_apellidos =  $request->nombres_apellidos;
        $participacion->genero = 1;
        $participacion->save();


        return $participacion;


     }


}
