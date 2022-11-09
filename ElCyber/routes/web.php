<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;
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
    return view('welcome');
});

Route:: get('/',[ControladorPaginas::class,'fFormulario']) ->name('NFormulario');
Route:: get('/Consulta',[ControladorPaginas::class,'fConsulta']) ->name('NConsulta');
Route:: get('/recuerdos/{nombre?}',[ControladorPaginas::class,'fRecuerdos']) ->name('NRecuerdos');

Route::post('/guardarRecuerdos', [ControladorPaginas::class, 'procesarRecuerdos'])->name('NProcesar');