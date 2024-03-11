<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VisitorController::class, 'index'])->name('inicio');
Route::get('/confirmacion', [VisitorController::class, 'confirmacion'])->name('confirmacion');
Route::post('/', [VisitorController::class, 'registrar'])->name('registrar');
