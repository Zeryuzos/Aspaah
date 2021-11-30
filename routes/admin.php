<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\SocioController;

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