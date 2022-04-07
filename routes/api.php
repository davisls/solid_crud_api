<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [ProductController::class, 'index']);
Route::post('/store', [ProductController::class, 'store']);
Route::put('/update/{id}', [ProductController::class, 'update']);
Route::delete('/delete/{id}', [ProductController::class, 'destroy']);
