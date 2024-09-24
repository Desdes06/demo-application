<?php

use App\Http\Controllers\IdentitasController;
use Illuminate\Support\Facades\Route;

// view
Route::get('/', function () {
    return view('home');
});

// data
Route::get('/pagenav', [IdentitasController::class, 'index'])->name('pagenav');
Route::post('/identitas', [IdentitasController::class, 'store'])->name('identitas.store');
Route::put('/identitas/{id}', [IdentitasController::class, 'update'])->name('identitas.update');
Route::delete('/delete/{id}', [IdentitasController::class, 'destroy']);
