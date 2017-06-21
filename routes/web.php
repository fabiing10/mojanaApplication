<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__.'/Backend/');


});


Route::get('/participacion/tematicas/{id}', 'ApplicationController@problematicaByTema');
Route::get('/participacion/problemas/{id}', 'ApplicationController@solucionByProblema');
Route::get('/participacion/tematicas/clasificacion/{option}', 'ApplicationController@loadTemasByClasificacion');



Route::get('/consulta/indicadores/mapa/{code}', 'ApplicationController@MapaIndicadoresByCode');
Route::get('/consulta/indicadores/documento/{code}', 'ApplicationController@DocumentoIndicadoresByCode');
Route::get('/consulta/{code}', 'ApplicationController@ListIndicadoresByCode');
Route::get('/consulta/indicadores/graficos/{code}', 'ApplicationController@GraficosIndicadoresId');
Route::get('/leer', 'ApplicationController@leerExcel');

Route::get('/resultados', 'ParticipacionController@answers');
Route::get('/resultados/pdf', 'ParticipacionController@answersPDF');


Route::get('/participacion/nuevo', 'ParticipacionController@index');
Route::post('/participacion/nuevo', 'ParticipacionController@save');


Route::get('/resultados/q/{option}', 'ParticipacionController@dataResponse');
Route::get('/participacion/load/{name}', 'ParticipacionController@excelRecoleccion');



/*Recoleccion*/
Route::get('/datos/q/{option}/', 'RecoleccionController@dataResponse');
Route::get('/datos/q/{option}/{other}', 'RecoleccionController@dataResponseMunicipio');
Route::get('/datos', 'RecoleccionController@answers');
Route::post('/datos/municipio', 'RecoleccionController@getMunicipio');
