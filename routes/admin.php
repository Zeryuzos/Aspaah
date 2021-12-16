<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\HijoController;

/*Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin');*/

Route::get('admin','App\Http\Controllers\Admin\HomeController@index');

Route::resource('categorias', 'App\Http\Controllers\CategoriaController');
Route::resource('departamentos', 'App\Http\Controllers\DepartamentoController');
Route::resource('provincias', 'App\Http\Controllers\ProvinciaController');
Route::resource('distritos', 'App\Http\Controllers\DistritoController');
Route::resource('comunidads', 'App\Http\Controllers\ComunidadController');
Route::resource('socios', 'App\Http\Controllers\SocioController');
Route::resource('hijos', 'App\Http\Controllers\HijoController');
Route::get('/distritos/provincia_idByDep/{idDepartamento}','App\Http\Controllers\DistritoController@provincia_idByDep');
Route::get('/comunidads/provincia_idByDep/{idDepartamento}','App\Http\Controllers\ComunidadController@provincia_idByDep');
Route::get('/comunidads/distrito_idByProv/{idProvincia}','App\Http\Controllers\ComunidadController@distrito_idByProv');
Route::get('/socios/provincia_idByDep/{idDepartamento}','App\Http\Controllers\SocioController@provincia_idByDep');
Route::get('/socios/distrito_idByProv/{idProvincia}','App\Http\Controllers\SocioController@distrito_idByProv');
Route::get('/socios/comunidad_idByDist/{idComunidad}','App\Http\Controllers\SocioController@comunidad_idByDist');
Route::get('/socios/{socio}', [App\Http\Controllers\SocioController::class, 'show'])->name('socio.show');


