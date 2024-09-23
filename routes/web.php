<?php

use App\Http\Controllers\IdentitasController;
use App\Models\Identitas;
use Illuminate\Support\Facades\Route;

// view
Route::get('/', function () {
    return view('home');
});

// data
Route::get('/pagenav', [IdentitasController::class, 'index'])->name('pagenav');
Route::post('/submit-form', [IdentitasController::class, 'store'])->name('store');
Route::post('/edit-form/{id}', [IdentitasController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [IdentitasController::class, 'destroy']);