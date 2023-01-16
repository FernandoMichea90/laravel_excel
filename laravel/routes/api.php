<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimientosController as Movimientos;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// controlador movimientos
//obtener todos los movimientos
Route::get('get_movimientos', [Movimientos::class, 'get_movimientos']);
// buscar movimientos por id 
Route::get('get_movimiento/{id}', [Movimientos::class, 'get_movimiento']);
//borrar  movimiento por id 
Route::delete('delete_movimiento/{id}', [Movimientos::class, 'delete_movimiento']);
//crear movimiento
Route::post('create_movimiento', [Movimientos::class, 'create_movimiento']);
//actualizar movimiento
Route::put('update_movimiento/{id}', [Movimientos::class, 'update_movimiento']);
// Route::get('/movimientos', [\App\Http\Controllers\Movimientos::class, 'obtenerMovimientos']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
