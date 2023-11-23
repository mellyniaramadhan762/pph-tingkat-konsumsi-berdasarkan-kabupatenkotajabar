<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pph_tingkat_konsumsiController;

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

Route::get('/pph_tingkat_konsumsi', [pph_tingkat_konsumsiController::class, 'index']);
Route::get('/pph_tingkat_konsumsi/{id}', [pph_tingkat_konsumsiController::class, 'show']);
Route::post('/pph_tingkat_konsumsi', [pph_tingkat_konsumsiController::class, 'store']);
Route::put('/pph_tingkat_konsumsi/{id}', [pph_tingkat_konsumsiController::class, 'update']);
Route::delete('/pph_tingkat_konsumsi/{id}', [pph_tingkat_konsumsiController::class, 'destroy']);
