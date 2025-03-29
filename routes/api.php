<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::apiResource('films', FilmController::class);
Route::get('films/rating/{rating}', [FilmController::class, 'filterByRating']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
