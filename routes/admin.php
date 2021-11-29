<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

/*Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin');*/

Route::get('','App\Http\Controllers\Admin\HomeController@index');

Route::get('/crud', function () {
    return view('crud.index');
});

Route::get('/crud/distritos_create', function () {
    return view('crud.distritos_create');
});