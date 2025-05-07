<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/carros', [CarrosController::class, 'index']);
