<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


Route::get('/', [homeController::class, 'home']);
Route::get('/user', [homeController::class, 'user'])->name('user');
Route::post('/upload', [homeController::class, 'upload']); //upload file to minio
Route::post('/ref' , [homeController::class, 'ref']);  // delete the latest file in minio
Route::get('/tabeldata', [homeController::class, 'tabeldata']);
