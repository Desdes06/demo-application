<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


Route::get('/', [homeController::class, 'home']);
Route::get('/user', [homeController::class, 'user'])->name('user');
Route::get('/upload', [homeController::class, 'upload']);
Route::get('/ref' , [homeController::class, 'ref']);
