<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroColaboradorController;
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

//Ruta para ingresar el colaborador
Route::post('/', [RegistroColaboradorController::class, 'store']);

Route::get('/', HomeController::class);
Route::get('/consulta', ConsultaController::class);
Route::get('/resultados', [RegistroColaboradorController::class, 'index']);