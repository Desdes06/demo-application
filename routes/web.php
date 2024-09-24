<?php

use App\Http\Controllers\IdentitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

// view
Route::get('/', function () {
    return view('home');
});

// data
Route::get('/pagenav', [IdentitasController::class, 'index'])->name('pagenav');
Route::post('/identitas', [IdentitasController::class, 'store'])->name('identitas.store');
Route::put('/identitas/{id}', [IdentitasController::class, 'update'])->name('identitas.update');
Route::delete('/delete/{id}', [IdentitasController::class, 'destroy']);

Route::get('/', [homeController::class, 'home']);
Route::get('/user', [homeController::class, 'user'])->name('user');
Route::post('/upload', [homeController::class, 'upload']); //upload file to minio
Route::post('/ref' , [homeController::class, 'ref']);  // delete the latest file in minio

Route::get('/form' , [homeController::class, 'form']);
