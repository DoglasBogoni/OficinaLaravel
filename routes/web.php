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
    return view("Welcome");
});
Route::get('contas', [\App\Http\Controllers\ContasController::class, 'index']);
Route::get('clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
Route::get('fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index']);
Route::get('pecas', [\App\Http\Controllers\PecasController::class, 'index']);
Route::get('servicos', [\App\Http\Controllers\ServicosController::class, 'index']);
//Route::get('atores',[\App\Http\Controllers\AtoresController::class,	'index']);

