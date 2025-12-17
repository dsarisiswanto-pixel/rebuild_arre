<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.9s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }


        .navbar {
            transition: all 0.35s ease;
        }

        .navbar.scrolled {
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }


        .hero {
            position: relative;
            overflow: hidden;
        }


        .detail-img {
            width: 100%;
            height: 340px;
            object-fit: contain;
            background-color: #ffffff;
            border-radius: 16px;
            border: 3px solid #eaeaea;
        }

        .hero-image img {
            transition: transform .45s ease, box-shadow .45s ease;
        }

        .detail-img:hover,
        .hero-image img:hover {
            transform: scale(1.04);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .25);
        }

        .btn {
            transition: all .25s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .carousel-item {
            transition: transform .8s ease-in-out, opacity .6s ease-in-out;
        }

        .animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .animate.show {
            opacity: 1;
            transform: translateY(0);
        }

        .nav-animate {
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.6s ease;
        }

        .nav-animate.show {
            opacity: 1;
            transform: translateY(0);
        }

        :root {
            --brand-900: #0a1f44;
            --brand-700: #1a3b7c;
            --accent: #4da6ff;
            --bg: #f5f8ff;
        }



        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            padding-top: 70px;
        }

        .btn-wa {
            background: #0d6efd;
            color: #fff !important;
            font-weight: 600;
            border-radius: 10px;
            padding: 10px 18px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.25s ease;
        }

        .btn-wa:hover {
            background: #0b5ed7;
            transform: translateY(-1px);
        }


        nav a {
            color: #000000 !important;
            font-weight: 500;
        }

        nav a:hover {
            color: #1B3C53 !important;
        }

        #navbarLogo {
            height: 40px;
            width: auto;
        }

        nav.navbar {
            background: #fff;
        }

        .hero {
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700));
            padding: 120px 0 90px;
            color: #fff;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 700;
            color: var(--accent);
            word-break: break-word;
        }

        .hero-image img {
            width: 100%;
            max-width: 420px;
            border-radius: 16px;
            border: 4px solid rgba(255, 255, 255, .35);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .25);
        }

        .detail-img {
            height: 280px;
            object-fit: cover;
            border-radius: 16px;
            border: 3px solid #eaeaea;
        }

        .main-footer {
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700));
            color: #ffffff;
            padding-top: 60px;
        }

        .main-footer .container,
        .main-footer .row,
        .main-footer [class*="col-"] {
            background: transparent !important;
        }

        .footer-col-title {
            color: #ffffff;
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.85);
            line-height: 2.2;
            text-decoration: none;
        }

        .footer-link:hover {
            color: #ffffff;
        }

        .social-icon-circle {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.18);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .social-icon-circle:hover {
            background: var(--accent);
            transform: scale(1.1);
        }

        .copyright {
            background: linear-gradient(135deg, #081833, #0a1f44);
            color: rgba(255, 255, 255, 0.7);
            padding: 14px 0;
            font-size: 14px;
        }


        @media(max-width:768px) {
            .hero {
                text-align: center;
                padding: 90px 0 60px;
            }

            .hero-title {
                font-size: 32px;
            }

            .hero-image {
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm custom-navbar reveal">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero">
                <img src="/assets/img/logo-ws.png" alt="Logo" id="navbarLogo" class="logo-nav">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-scroll" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-wa ms-lg-2 px-3 py-2"
                            href="https://wa.me/6282231316699?text=Halo%20Arre%20Technology,%20saya%20ingin%20konsultasi"
                            target="_blank"
                            rel="noopener">
                            <i class="fab fa-whatsapp me-1"></i> Hubungi Kami
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    @php
    $gambar = json_decode($item->gambar, true);
    if (!is_array($gambar) || count($gambar) === 0) {
    $gambar = ['default.jpg'];
    }
    @endphp


    <section class="hero">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <h1 class="hero-title reveal">{{ $item->nama }}</h1>
                </div>
                <div class="col-lg-6 text-center hero-image reveal">
                    <img src="{{ asset('uploads/'.$gambar[0]) }}" alt="{{ $item->nama }}">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 reveal">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <div id="portfolioCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach($gambar as $key => $img)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="{{ asset('uploads/'.$img) }}" class="w-100 detail-img shadow-sm">
                        </div>
                        @endforeach

                    </div>
                    @if(count($gambar) > 1)
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#portfolioCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#portfolioCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    @endif
                </div>
            </div>

            <div class="col-lg-7">
                <h2 class="fw-bold mb-3">{{ $item->nama }}</h2>

                <div class="bg-white p-4 rounded-4 shadow-sm border mt-4">
                    <p><strong>Kategori:</strong> {{ $item->kategori }}</p>
                    <p><strong>Tanggal:</strong> {{ $item->created_at->format('d M Y') }}</p>

                    <div class="d-flex gap-2 mt-3">
                        @if($item->link)
                        <a href="{{ $item->link }}" target="_blank" class="btn btn-primary btn-sm">
                            Preview
                        </a>
                        @endif
                        <a href="/" class="btn btn-outline-secondary btn-sm">
                            Kembali
                        </a>
                    </div>

                </div>

            </div>
            <p class="text-muted">{{ $item->deskripsi }}</p>
        </div>
    </section>

    <footer class="main-footer reveal">
        <div class="container pt-5">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">ARRE TECHNOLOGY</h5>
                    <p class="small text-secondary mb-1">Jl. Suryat No.83, Gedog, Kec. Sananwetan, Kota Blitar, Jawa
                        Timur 66132</p>
                    <p class="small mb-1 text-secondary"><strong>Phone:</strong> 0822-3131-6699</p>
                    <p class="small text-secondary"><strong>Email:</strong> reza@dbn.net.id</p>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#hero" class="text-decoration-none footer-link small">> Home</a></li>
                        <li><a href="#about" class="text-decoration-none footer-link small">> About Us</a></li>
                        <li><a href="#services" class="text-decoration-none footer-link small">> Services</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Terms of service</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none footer-link small">> Web Design</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Web Development</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Product Management</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Marketing</a></li>
                        <li><a href="#" class="text-decoration-none footer-link small">> Graphic Design</a></li>
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
                © Copyright <strong class="text-white">Arre Technology</strong>. All Rights Reserved
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            setTimeout(() => {
                document.querySelector(".nav-animate")?.classList.add("show");
            }, 100);

            const animatedItems = document.querySelectorAll(".animate");

            animatedItems.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add("show");
                }, 200 + index * 200);
            });

        });
        const reveals = document.querySelectorAll(".reveal");
        reveals.forEach((el, i) => {
            setTimeout(() => el.classList.add("show"), 150 + i * 120);
        });


        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, {
            threshold: 0.15
        });

        reveals.forEach(el => observer.observe(el));


        const navbar = document.querySelector(".navbar");
        window.addEventListener("scroll", () => {
            navbar.classList.toggle("scrolled", window.scrollY > 40);
        });


        const heroImg = document.querySelector(".hero-image img");
        window.addEventListener("scroll", () => {
            if (!heroImg) return;
            heroImg.style.transform = `translateY(${window.scrollY * 0.15}px) scale(1.04)`;
        });
    </script>

</body>

</html>