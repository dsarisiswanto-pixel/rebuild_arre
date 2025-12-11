<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Arre Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* Variabel Warna Biru Tua Estetik */
        :root {
            --accent: #0a1f44; /* Biru Tua */
            --bg-gradient-start: rgba(255, 255, 255, 0.6);
            --bg-gradient-end: rgba(255, 255, 255, 0.2);
            --text-color: #1e1e2f;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        html,
        body {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #cfd9ff, #e6f0ff);
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Glassmorphism Card */
        .card {
            background: linear-gradient(135deg, var(--bg-gradient-start), var(--bg-gradient-end));
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 25px;
            box-shadow: 0 8px 30px var(--shadow-color);
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        /* Header Card dengan Wave Estetik */
        .card-header-visual {
            background: linear-gradient(135deg, var(--accent), #162a66);
            color: white;
            padding: 40px 20px;
            text-align: center;
            position: relative;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
        }

        .card-header-visual::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 100%;
            height: 30px;
            background: white;
            border-radius: 50%/100%;
            opacity: 0.08;
        }

        .text-main-title {
            font-weight: 700;
            font-size: 1.6rem;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        /* Inputs */
        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.5);
            color: var(--text-color);
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 0.25rem rgba(10, 31, 68, 0.25);
            background: rgba(255, 255, 255, 0.7);
        }

        /* Button */
        .btn-primary {
            background: var(--accent);
            border-color: var(--accent);
            font-weight: 600;
            padding: 12px;
            border-radius: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #061734;
            border-color: #061734;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(10, 31, 68, 0.3);
        }

        .link-muted {
            color: #555 !important;
            font-weight: 500;
            transition: color 0.3s;
        }

        .link-muted:hover {
            color: var(--text-color) !important;
        }

        /* Input group icons */
        .input-group-text {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 12px 0 0 12px;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        /* --- Style Modal Sukses Khusus Halaman Login --- */
        .login-success-icon-container {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            /* Latar belakang biru muda, tapi lebih transparan */
            background-color: rgba(37, 99, 235, 0.1); 
            color: #2563eb; /* Biru terang untuk ikon */
            font-size: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
        }

        .btn-success-ok {
            /* Menggunakan warna accent biru tua */
            background-color: var(--accent);
            border-color: var(--accent);
            color: white;
            font-weight: 600;
        }
        .btn-success-ok:hover {
            background-color: #061734;
            border-color: #061734;
        }

    </style>
</head>

<body>
    <div class="container login-wrapper">
        <div class="card" style="max-width: 400px; width: 100%;">

            <div class="card-header-visual">
                <p class="mb-0 small opacity-75">Arre Technology</p>
                <h3 class="text-main-title">Administrasi</h3>
            </div>

            <div class="card-body p-4 p-sm-5">
                <h5 class="text-main-title text-center mb-4" style="font-size: 1.25rem;">Silakan Masuk</h5>

                {{-- Alert untuk menampilkan error umum jika ada --}}
                @error('email')
                <div class="alert alert-danger p-2 small" role="alert">
                    <strong>Gagal:</strong> Email atau password salah.
                </div>
                @enderror
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label small text-muted">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan email Anda">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label small text-muted">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock fa-fw"></i></span>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Masukkan password">
                        </div>
                    </div>

                    <div class="mb-4 form-check d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label class="form-check-label small text-muted" for="remember">Ingat Saya</label>
                        </div>

                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="small link-muted text-decoration-none">Lupa Password?</a>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i> MASUK
                    </button>
                    
                    <p class="text-center small mt-3">
                        Belum punya akun? 
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="link-muted text-decoration-none fw-bold">Daftar di sini</a>
                        @endif
                    </p>

                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="SuccessModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:350px;">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    
                    <div class="login-success-icon-container">
                        <i class="fas fa-check"></i>
                    </div>

                    <h5 id="successTitle" class="fw-bold mb-1">Berhasil!</h5>

                    <p id="successMessage" class="text-muted small mb-3"></p>

                    <button type="button" class="btn btn-success-ok w-75" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 

    <script>
        // ------------------------------------------------------------------
        // SCRIPT BARU: Tampilkan Modal Sukses jika ada Session Success
        // ------------------------------------------------------------------
        $(document).ready(function() {
            // Cek apakah ada session 'success' (menggunakan jQuery untuk mengambil nilai Blade)
            const successMessage = "<?php echo session('success') ?? ''; ?>";

            if (successMessage) {
                const modalElement = document.getElementById('SuccessModal');
                const modal = new bootstrap.Modal(modalElement);
                
                // Tentukan Judul Berdasarkan Pesan
                let title = "Berhasil!";
                let message = successMessage;

                if (successMessage.includes('berhasil logout')) {
                    title = 'Anda Telah Logout';
                } else if (successMessage.includes('Registrasi berhasil')) {
                    title = 'Pendaftaran Sukses';
                } 

                $('#successTitle').text(title);
                $('#successMessage').text(message);
                
                modal.show();
            }
        });
    </script>
</body>

</html>