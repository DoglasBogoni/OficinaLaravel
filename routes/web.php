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
    return view('welcome');
});
Route::get('contas', [\App\Http\Controllers\ContasController::class, 'index']);
Route::get('clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
Route::get('fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index']);
Route::get('pecas', [\App\Http\Controllers\PecasController::class, 'index']);
Route::get('servicos', [\App\Http\Controllers\ServicosController::class, 'index']);

Route::get('clientes/create', [\App\Http\Controllers\ClientesController::class, 'create']);
Route::get('contas/create', [\App\Http\Controllers\ContasController::class, 'create']);
Route::get('fornecedores/create', [\App\Http\Controllers\FornecedorController::class, 'create']);
Route::get('pecas/create', [\App\Http\Controllers\PecasController::class, 'create']);
Route::get('servicos/create', [\App\Http\Controllers\ServicosController::class, 'create']);

Route::post('clientes/store', [\App\Http\Controllers\ClientesController::class, 'store']);
Route::post('contas/store', [\App\Http\Controllers\ContasController::class, 'store']);
Route::post('fornecedores/store', [\App\Http\Controllers\FornecedorController::class, 'store']);
Route::post('pecas/store', [\App\Http\Controllers\PecasController::class, 'store']);
Route::post('servicos/store', [\App\Http\Controllers\ServicosController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
