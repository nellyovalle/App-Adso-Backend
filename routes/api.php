<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ventaDiariaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ClienteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 
route::get('/categoria/datos',[CategoriaController::class, 'getData']);
route::post('/categoria/save',[CategoriaController::class, 'save']);
route::put('/categoria/update',[CategoriaController::class, 'update']);
route::delete('/categoria/delete',[CategoriaController::class, 'delete']);
 
route::get('/producto/datos',[ProductoController::class, 'getData']);
route::post('/producto/save',[ProductoController::class, 'save']);
route::put('/producto/update',[ProductoController::class, 'update']);
route::delete('/producto/delete',[ProductoController::class, 'delete']);

route::get('/ventaDaria/datos',[ventaDairiaController::class, 'getData']);
route::post('/ventaDiaria/save',[ventaDiariaController::class, 'save']);
route::put('/ventaDiaria/update',[ventaDiariaController::class, 'update']);
route::delete('/ventaDairia/delete',[ventaDiariaController::class, 'delete']);

route::get('/factura/datos',[FacturaController::class, 'getData']);
route::post('/factura/save',[FacturaController::class, 'save']);
route::put('/factura/update',[FacturaController::class, 'update']);
route::delete('/factura/delete',[FacturaController::class, 'delete']);

route::get('/cliente/datos',[ClienteController::class, 'getData']);
route::post('/cliente/save',[ClienteController::class, 'save']);
route::put('/cliente/update',[ClienteController::class, 'update']);
route::delete('/cliente/delete',[ClienteController::class, 'delete']);