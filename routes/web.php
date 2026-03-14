<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JamPelayananController;
use App\Http\Controllers\PengaduanController;

//jam
Route::get('/jam', [JamPelayananController::class,'index']);
Route::get('/jam/create', [JamPelayananController::class,'create']);
Route::post('/jam/store', [JamPelayananController::class,'store']);
Route::get('/jam/{id}/edit', [JamPelayananController::class,'edit']);
Route::put('/jam/{id}/update', [JamPelayananController::class,'update']);
Route::delete('/jam/{id}/delete', [JamPelayananController::class,'destroy']);

//pengaduan
Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::get('pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('pengaduan/{id}/edit', [PengaduanController::class, 'edit'])->name('pengaduan.edit');
Route::put('pengaduan/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');
Route::delete('pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');

//agenda
Route::resource('agenda', AgendaController::class);
Route::get('/agenda/create', [AgendaController::class, 'create']);
Route::post('/agenda/store', [AgendaController::class, 'store']);
Route::delete('/agenda/{id}', [AgendaController::class, 'destroy']);

// Auth
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

//resident
Route::get('/resident', [ResidentController::class, 'index']);
Route::get('/resident/create', [ResidentController::class, 'create']);
Route::post('/resident', [ResidentController::class, 'store']);
Route::get('/resident/{id}/edit', [ResidentController::class, 'edit']);
Route::put('/resident/{id}', [ResidentController::class, 'update']);
Route::delete('/resident/{id}', [ResidentController::class, 'destroy']);

