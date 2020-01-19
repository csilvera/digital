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

Route::get('/', function () {
    $locale = 'es';
    App::setLocale($locale);
    return view('inicio',['lang'=> $locale]);
});
Route::get('/panel', function () {
    $locale = 'es';
    App::setLocale($locale);
    return view('control',['lang'=> $locale]);
});
/*
Route::get('/pruebas', function () {
    $locale = 'es';
    App::setLocale($locale);
    return view('codigo',['lang'=> $locale]);
});
//Route::get('/in?int=CesarSilvera', 'OperEnvios@index');

Route::get('/inte', 'OperEnvios@index'); */