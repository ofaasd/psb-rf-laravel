<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\apiMiddleware;

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

Route::middleware(apiMiddleware::class)->post('update_data_siswa',[\App\Http\Controllers\psbNewController::class, 'update_data_pribadi']);
Route::middleware(apiMiddleware::class)->post('update_data_berkas',[\App\Http\Controllers\psbNewController::class, 'update_data_berkas']);
Route::middleware(apiMiddleware::class)->post('simpan_bukti_bayar_api_admin',[\App\Http\Controllers\psbNewController::class, 'simpan_bukti_bayar_api_admin']);

