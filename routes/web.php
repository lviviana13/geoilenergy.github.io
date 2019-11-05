<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

/** Servicios */
Route::get('/servicios/{idservicio}/{idsubservicio?}', 'ServiciosController@servicios');

/** Softtware */
Route::get('/software/{idsoftware}/{idsubsoftware?}', 'SoftwareController@software');

Route::get('/nosotros', 'NosotrosController@index');
Route::get('/aliados', 'AliadosController@index');
Route::get('/contacto', 'ContactoController@index');

// Route::get('/enprueba', function () {
//  return view('en.software.geofisica', ['title' => 'welcome al barrio' ]);
// } );
