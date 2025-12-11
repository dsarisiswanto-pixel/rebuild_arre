<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman registrasi.
     */
    public function showRegister() {
        return view('register');
    }

    /**
     * Memproses data registrasi pengguna baru.
     */
    public function register(Request $request) {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Langsung login setelah registrasi
        Auth::login($user);
        
        // Redirect ke dashboard dengan notifikasi sukses
        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil! Anda telah masuk.');
    }

    /**
     * Menampilkan halaman login.
     */
    public function showLogin() {
        return view('login');
    }

    /**
     * Memproses otentikasi (login) pengguna.
     */
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Coba otentikasi
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            
            // Login Berhasil: Redirect ke dashboard dengan notifikasi sukses
            return redirect()->intended('/dashboard')
                ->with('success', 'Login Berhasil! Selamat datang kembali.'); 
        }

        // Login Gagal: Kembali ke halaman login dengan pesan error
        throw ValidationException::withMessages([
            'email' => ['Email atau password yang Anda masukkan salah.'],
        ])->redirectTo(route('login'));
    }

    /**
     * Melakukan proses logout pengguna.
     */
    public function logout(Request $request) {
        Auth::logout(); // Hapus sesi otentikasi
        $request->session()->invalidate(); // Hapus semua data sesi
        $request->session()->regenerateToken(); // Buat token baru

        // Redirect ke halaman login dengan notifikasi sukses
        return redirect()->route('login')->with('success', 'Anda telah berhasil logout. Sampai jumpa!');
    }
}