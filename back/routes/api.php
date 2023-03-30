<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RefugeesController;
use App\Http\Controllers\ServicesResources;
use App\Http\Controllers\ServicesResourcesController;
use App\Http\Controllers\StatsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/refugees', [RefugeesController::class, 'index']);
Route::middleware('auth:sanctum')->get('/refugees/{id}', [RefugeesController::class, 'show']);
Route::middleware('auth:sanctum')->post('/refugees', [RefugeesController::class, 'store']);
Route::middleware('auth:sanctum')->put('/refugees/{id}', [RefugeesController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/refugees/{id}', [RefugeesController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/services-resources', [ServicesResourcesController::class, 'index']);
Route::middleware('auth:sanctum')->get('/services-resources/{id}', [ServicesResourcesController::class, 'show']);
Route::middleware('auth:sanctum')->post('/services-resources', [ServicesResourcesController::class, 'store']);
Route::middleware('auth:sanctum')->put('/services-resources/{id}', [ServicesResourcesController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/services-resources/{id}', [ServicesResourcesController::class, 'destroy']);

Route::get('/estadisticas-ong', [StatsController::class, 'statsPerOng']);
Route::get('/estadisticas-pais', [StatsController::class, 'statsPerCountry']);
Route::get('/estadisticas-conflicto', [StatsController::class, 'statsPerConflict']);
Route::get('/estadisticas-media-refugiado', [StatsController::class, 'statsPerRefugee']);

Route::post('/login', [LoginController::class, 'login']);

