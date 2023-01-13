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
Route::get('get_movimientos', [Movimientos::class, 'get_movimientos']);
// buscar movimientos por id 
Route::get('get_movimiento/{id}', [Movimientos::class, 'get_movimiento']);

// Route::get('/movimientos', [\App\Http\Controllers\Movimientos::class, 'obtenerMovimientos']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
