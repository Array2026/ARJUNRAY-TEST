<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

// Guest middleware
Route::middleware('guest.custom')->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/', [AuthController::class, 'showlogin']);
    Route::post('/login', [AuthController::class, 'login']);
});

// Auth middleware
Route::middleware('auth.custom')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user_create', [UserController::class, 'create']);
    Route::post('/user_store', [UserController::class, 'store']);
    Route::get('/user_edit/{id}', [UserController::class, 'edit']);
    Route::put('/user_update/{id}', [UserController::class, 'update']);
    Route::delete('/user_destroy/{id}', [UserController::class, 'destroy']);

    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product_create', [ProductController::class, 'create']);
    Route::post('/product_store', [ProductController::class, 'store']);
    Route::get('/product_show/{id}', [ProductController::class, 'show']);
    Route::get('/product_edit/{id}', [ProductController::class, 'edit']);
    Route::put('/product_update/{id}', [ProductController::class, 'update']);
    Route::delete('/product_destroy/{id}', [ProductController::class, 'destroy']);
});