<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'page'])->name('client.index'); 
Route::get('/klien/{id}', [PortofolioController::class, 'show'])->name('client.show'); 
Route::get('/klien-semua', [PortofolioController::class, 'allClients'])->name('client.all'); 
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PortofolioController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/create', [PortofolioController::class, 'create'])->name('dashboard.portofolio.create'); 
    Route::post('/dashboard/store', [PortofolioController::class, 'store'])->name('dashboard.portofolio.store');
    Route::get('/dashboard/edit/{id}', [PortofolioController::class, 'edit'])->name('dashboard.portofolio.edit'); 
    Route::post('/dashboard/update/{id}', [PortofolioController::class, 'update'])->name('dashboard.portofolio.update'); 
    Route::delete('/dashboard/{id}', [PortofolioController::class, 'destroy'])->name('dashboard.portofolio.destroy');
});
Route::get('/clients', [PortofolioController::class, 'allClients'])->name('client.all');
