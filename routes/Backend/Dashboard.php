<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('indicadores', 'DashboardController@indicadores')->name('indicadores');
