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

Route::get('/{lenguaje?}', 'HomeController@index');

/** Servicios */
Route::get('/{lenguaje}/servicios/{idservicio}/{idsubservicio?}', 'ServiciosController@servicios');

/** Softtware */
Route::get('/{lenguaje}/software/{idsoftware}/{idsubsoftware?}', 'SoftwareController@software');

Route::get('/{lenguaje}/nosotros', 'NosotrosController@index');
Route::get('/{lenguaje}/aliados', 'AliadosController@index');
Route::get('/{lenguaje}/contacto', 'ContactoController@index');

route::post('/contact', 'ContactoController@form');