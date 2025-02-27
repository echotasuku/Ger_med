<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\RetiradaController;
use App\Http\Controllers\FarmaceuticoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/consultar-cep/{cep}', [FornecedorController::class, 'consultarCep']);
Route::apiResource('fornecedores', FornecedorController::class);
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('medicamentos', MedicamentoController::class);
Route::apiResource('estoque', EstoqueController::class);
Route::apiResource('retiradas', RetiradaController::class);
Route::apiResource('farmaceuticos', FarmaceuticoController::class);
