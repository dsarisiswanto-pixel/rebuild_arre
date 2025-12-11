<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortofolioController;

// ------------------------------------------------------------------
// 1. ROUTE PUBLIK / LANDING PAGE
// ------------------------------------------------------------------

// Rute Halaman Utama: Menampilkan LIMIT 6 item (PortofolioController@page menggunakan limit(6)->get())
Route::get('/', [PortofolioController::class, 'page'])->name('client.index'); 

// Rute Detail Klien: Menampilkan satu item detail
Route::get('/klien/{id}', [PortofolioController::class, 'show'])->name('client.show'); 

// [PENAMBAHAN PENTING] Rute baru untuk tombol "Lihat Semua Klien"
// Memanggil PortofolioController@allClients
Route::get('/klien-semua', [PortofolioController::class, 'allClients'])->name('client.all'); 


// ------------------------------------------------------------------
// 2. ROUTE AUTHENTIKASI
// ------------------------------------------------------------------

// Halaman Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

// Halaman Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ------------------------------------------------------------------
// 3. ROUTE DASHBOARD (CRUD ADMIN) - DIJAGA UNIK DENGAN PREFIX NAMA
// ------------------------------------------------------------------
Route::middleware('auth')->group(function () {
    
    // Dashboard Index
    Route::get('/dashboard', [PortofolioController::class, 'dashboard'])->name('dashboard');

    // Create & Store (Route ini sekarang melayani Modal Tambah)
    Route::get('/dashboard/create', [PortofolioController::class, 'create'])->name('dashboard.portofolio.create'); 
    Route::post('/dashboard/store', [PortofolioController::class, 'store'])->name('dashboard.portofolio.store');

    // Edit & Update (Route ini sekarang melayani Modal Edit)
    Route::get('/dashboard/edit/{id}', [PortofolioController::class, 'edit'])->name('dashboard.portofolio.edit'); 
    
    // UPDATE: Route yang digunakan oleh form Modal Edit
    Route::post('/dashboard/update/{id}', [PortofolioController::class, 'update'])->name('dashboard.portofolio.update'); 

    // Destroy
    Route::delete('/dashboard/{id}', [PortofolioController::class, 'destroy'])->name('dashboard.portofolio.destroy');
});
// Route untuk halaman lihat semua klien
Route::get('/clients', [PortofolioController::class, 'allClients'])->name('client.all');
