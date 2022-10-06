<?php

use App\Http\Controllers\StoreController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WordController::class, 'index']);
Route::post('/stack/add', [WordController::class, 'push']);
Route::get('/stack/get', [WordController::class, 'pull']);

Route::get('/store', [StoreController::class, 'index']);
Route::post('/store', [StoreController::class, 'create']);
Route::get('/store/{key}', [StoreController::class, 'show']);
Route::get('/store/delete/{key}', [StoreController::class, 'delete']);
