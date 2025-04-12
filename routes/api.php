<?php

use App\Http\Controllers\TevekenysegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tevekenysegs', [TevekenysegController::class, 'index']);
Route::get('/tevekenysegs/{katId}/kategorias', [TevekenysegController::class, 'getKategoriaId']);
Route::post('/tevekenysegs', [TevekenysegController::class, 'store']);
Route::delete('/tevekenysegs/{id}', [TevekenysegController::class, 'destroy']);
Route::put('/tevekenysegs', [TevekenysegController::class, 'update']);
