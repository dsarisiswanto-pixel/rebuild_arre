<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Klien - Arre Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-900: #0a1f44;
            --accent: #4da6ff;
            --bg: #f5f8ff;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--brand-900);
            padding-top: 80px;
        }
        nav {
            background: #ffffff !important;
        }

        nav a {
            color: #000 !important;
            font-weight: 500;
        }

        nav a:hover {
            color: #1B3C53 !important;
        }

        #navbarLogo {
            height: 40px;
            width: auto;
        }
        .navbar .btn-info {
            background-color: var(--accent);
            border-color: var(--accent);
            color: white;
        }

        .navbar .btn-info:hover {
            background-color: var(--accent) !important;
            border-color: var(--accent) !important;
            color: white !important;
        }
        .portfolio-card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .portfolio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .portfolio-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .portfolio-card:hover img {
            transform: scale(1.05);
        }

        .main-footer {
            background-color: #ffffff;
            color: var(--brand-900);
            padding-top: 60px;
            border-top: 1px solid #e9ecef;
        }

        .footer-col-title {
            color: var(--brand-900);
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .main-footer p,
        .main-footer li,
        .main-footer a,
        .main-footer .text-secondary,
        .main-footer .small {
            color: #5a5a5a !important;
        }

        .footer-link {
            color: #5a5a5a;
            transition: color 0.3s;
            line-height: 2.2;
            text-decoration: none;
        }

        .footer-link:hover {
            color: var(--accent);
        }

        .social-icon-circle {
            width: 40px;
            height: 40px;
            background-color: #495057;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .social-icon-circle:hover {
            background-color: var(--accent);
        }

        .copyright {
            background-color: #1a1e21;
            color: #ffffff;
            text-align: left;
        }

        .main-footer .col-lg-3,
        .main-footer .col-md-6 {
            margin-bottom: 30px !important;
        }
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            width: 45px;
            height: 45px;
            background-color: var(--accent);
            color: white;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, opacity 0.3s;
            opacity: 0.95;
        }

        #scrollToTopBtn:hover {
            background-color: #3c95e0;
            opacity: 1;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero">
                <img src="/assets/img/logo-ws.png" alt="Logo" id="navbarLogo" class="logo-nav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="/#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5 container" style="margin-top:0;">
        <h2 class="text-center mb-4">Semua Klien</h2>
        <div class="border-bottom mb-5"></div>

        <div class="row g-4">
            @forelse($items as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card portfolio-card h-100 border-0 shadow-sm" data-bs-toggle="modal"
                    data-bs-target="#modal{{ $item->id }}">
                    <img src="{{ $item->gambar ? asset('uploads/'.$item->gambar) : asset('uploads/default.png') }}"
                        alt="{{ $item->nama }}" class="card-img-top img-fluid rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3">{{ $item->nama }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</p>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1"
                aria-labelledby="modal{{ $item->id }}Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal{{ $item->id }}Label">{{ $item->nama }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ $item->gambar ? asset('uploads/'.$item->gambar) : asset('uploads/default.png') }}"
                                class="img-fluid mb-3 rounded">
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>Tidak ada klien yang ditemukan.</p>
            </div>
            @endforelse
        </div>
    </section>

    <footer class="main-footer">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">ARRE TECHNOLOGY</h5>
                    <p class="small mb-1">Jl. Suryat No.83, Gedog, Kec. Sananwetan, Kota Blitar, Jawa Timur 66132</p>
                    <p class="small mb-1"><strong>Phone:</strong> 0822-3131-6699</p>
                    <p class="small"><strong>Email:</strong> reza@dbn.net.id</p>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/#hero" class="footer-link small">> Home</a></li>
                        <li><a href="/#about" class="footer-link small">> About Us</a></li>
                        <li><a href="/#services" class="footer-link small">> Services</a></li>
                        <li><a href="#" class="footer-link small">> Terms of service</a></li>
                        <li><a href="#" class="footer-link small">> Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link small">> Web Design</a></li>
                        <li><a href="#" class="footer-link small">> Web Development</a></li>
                        <li><a href="#" class="footer-link small">> Product Management</a></li>
                        <li><a href="#" class="footer-link small">> Marketing</a></li>
                        <li><a href="#" class="footer-link small">> Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Social Networks</h5>
                    <div class="d-flex mt-3">
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon-circle me-2"><i class="fab fa-skype"></i></a>
                        <a href="#" class="social-icon-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright py-3 mt-4">
            <div class="container small">
                © Copyright <strong>Arre Technology</strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <button id="scrollToTopBtn" aria-label="Gulir ke atas" title="Ke atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        window.onscroll = function () {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopBtn.style.display = "flex";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };
        scrollToTopBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil!',
            text: '{{ session("success") }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

</body>
</html>
