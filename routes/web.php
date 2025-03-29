<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/films', [FilmController::class, 'viewFilms']);
Route::get('/', function () {
    return view('welcome');
});
