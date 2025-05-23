<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test',[UserController::class, 'test']);
// Route::get('/users',[UserController::class, 'index']);


Route::apiResource('/users', UserController::class);