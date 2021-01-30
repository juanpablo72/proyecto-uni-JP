<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('/iniciar_sesion', function () {
    return view('login');
});
Route::get('/mosaico', function () {
    return view('mosaico');
});
Route::get('/lista', function () {
    return view('todosusers');
});
Route::get('/buscar', function () {
    return view('buscar');
});
Route::get('/registrar', function () {
    return view('nuevouser');
});
Route::get('/filtrar', function () {
    return view('filtrar');
});
Route::get('/resultados_busqueda', function () {
    return view('v_filtro');
});
Route::get('/admin', function () {
    return view('admin');
});