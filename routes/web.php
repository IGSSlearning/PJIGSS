<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EspecialidadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name(name:'home');
Route::resource('/especialidades', controller: EspecialidadController::class);

