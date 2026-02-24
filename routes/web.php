<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;



// Auth
Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});


Route::get('/resident', [ResidentController::class, 'index']);
Route::get('/resident/create', [ResidentController::class, 'create']);
Route::post('/resident', [ResidentController::class, 'store']);
Route::get('/resident/{id}/edit', [ResidentController::class, 'edit']);
Route::put('/resident/{id}', [ResidentController::class, 'update']);
Route::delete('/resident/{id}', [ResidentController::class, 'destroy']);

