<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category', [Category::class, 'index']);
Route::post('/category', [Category::class, 'store']);
Route::get('/category/{id}', [Category::class, 'show']);
Route::put('/category/{id}', [Category::class, 'update']);
Route::delete('/category/{id}', [Category::class, 'destroy']);



Route::post('login', [AuthController::class, 'login']);

