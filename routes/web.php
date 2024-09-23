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
Route::post('/submit-form', [IdentitasController::class, 'store'])->name('store');
Route::post('/edit-form/{id}', [IdentitasController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [IdentitasController::class, 'destroy']);

Route::get('/', [homeController::class, 'home']);
Route::get('/user', [homeController::class, 'user'])->name('user');
Route::post('/upload', [homeController::class, 'upload']); //upload file to minio
Route::post('/ref' , [homeController::class, 'ref']);  // delete the latest file in minio

Route::get('/form' , [homeController::class, 'form']);
