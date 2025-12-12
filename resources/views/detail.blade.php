<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        :root {
            --brand-900: #0a1f44;
            --brand-700: #1a3b7c;
            --accent: #4da6ff;
            --muted: #555;
            --bg: #f5f8ff;
        }

        body {
            height: 100%;
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--brand-900);
            scroll-behavior: smooth;
            padding-top: 70px;
            margin: 0;
        }

        nav.navbar {
            background: #ffffff !important;
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

        .hero {
            background: linear-gradient(135deg, var(--brand-900), var(--brand-700));
            padding: 140px 0 100px;
            color: #ffffff;
            text-align: left;
            min-height: 90vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .hero .hero-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(180deg, rgba(10, 31, 68, 0.15), rgba(26, 59, 124, 0.12));
        }

        .hero-title {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.15;
            color: var(--accent);
        }

        .hero-sub {
            font-size: 20px;
            margin-top: 15px;
            opacity: 0.95;
        }

        .hero-image img {
            max-width: 450px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(77, 166, 255, 0.4);
            transition: transform 0.5s, box-shadow 0.5s;
            will-change: transform;
        }

        .hero-image img:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(77, 166, 255, 0.6);
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--brand-900);
            text-align: center;
            margin-bottom: 20px;
        }

        .section-line {
            width: 80px;
            height: 4px;
            background: var(--accent);
            margin: 0 auto 40px auto;
            border-radius: 2px;
        }

        #clients img {
            max-width: 120px;
            opacity: 0.8;
            transition: all 0.45s ease-in-out;
            filter: grayscale(100%);
        }

        #clients img:hover {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.1);
        }

        .portfolio-card {
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(77, 166, 255, 0.18);
        }

        .portfolio-card h5 {
            color: var(--brand-900);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .portfolio-card p {
            color: var(--muted);
            flex-grow: 1;
        }

        .accordion-button {
            font-weight: 600;
            color: var(--brand-900);
            background-color: #e6f0ff;
            border-radius: 12px !important;
        }

        .accordion-button:not(.collapsed) {
            color: #fff;
            background-color: var(--accent);
            box-shadow: none;
        }

        .accordion-item {
            margin-bottom: 15px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }

        .btn-primary {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            background: #3c95e0;
            border-color: #3c95e0;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(77, 166, 255, 0.28);
        }

        .map-container {
            width: 100%;
            height: 400px;
            border-radius: 12px;
            overflow: hidden;
            margin-top: 20px;
        }

        .main-footer {
            background-color: #ffffff;
            color: #000000;
            padding-top: 60px;
        }

        .footer-link {
            color: #000000;
            transition: color 0.3s;
            line-height: 2.2;
        }

        .footer-link:hover {
            color: #000000;
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
            color: #aaa;
            text-align: left;
        }

        .object-fit-cover {
            object-fit: cover;
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

        #topProgress {
            position: fixed;
            left: 0;
            top: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), #3c95e0);
            width: 0%;
            z-index: 1100;
            transition: width 0.15s linear;
        }


        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
            will-change: opacity, transform;
        }

        .reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }


        .tilt-card {
            perspective: 1000px;
        }

        .tilt-card-inner {
            transform-style: preserve-3d;
            transition: transform 0.2s ease;
        }

        @media (max-width: 768px) {
            #navbarLogo {
                height: 35px;
            }

            .hero {
                padding: 100px 0 60px;
                text-align: center;
            }

            .hero-title {
                font-size: 38px;
                text-align: center;
            }

            .hero-sub {
                font-size: 16px;
                text-align: center;
            }

            .hero-text {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center !important;
            }

            .hero-image img {
                max-width: 300px;
                margin-bottom: 20px;
            }

            .section-title {
                font-size: 28px;
            }

            #clients img {
                max-width: 80px;
                margin: 10px 0;
            }

            .main-footer .col-lg-3,
            .main-footer .col-md-6 {
                margin-bottom: 30px !important;
            }
        }
    </style>
</head>

<body>


    <div id="topProgress"></div>

    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <img src="/assets/img/logo-ws.png" id="navbarLogo" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="hero">
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="hero-text order-2 order-md-1" style="max-width: 550px;">
                <h1 class="hero-title animate__animated animate__zoomIn">Jasa Pembuatan Website di Blitar</h1>
                <p class="hero-sub animate__animated animate__fadeInLeft animate__delay-1s">Arre Technology — Solutions for Your Websites</p>
            </div>
            <div class="hero-image order-1 order-md-2 animate__animated animate__fadeInRight animate__delay-1s">
                <img src="/assets/img/Web devices.gif" alt="Website Creator Illustration" class="img-fluid" id="heroImg">
            </div>
        </div>
    </section>


    <section class="py-5 container" style="margin-top: 0;">
        <div class="row g-4 align-items-center">


            <div class="col-lg-5 reveal tilt-card">
                <div class="tilt-card-inner p-2 rounded-4 shadow-sm bg-white" style="transform: rotate(-1.5deg); border: 1px solid #eee;">
                    <img src="{{ asset('uploads/' . $item->gambar) }}" class="w-100 rounded-3"
                        style="height: 260px; object-fit: cover;">
                </div>
            </div>

        
            <div class="col-lg-7 reveal tilt-card">
                <div class="tilt-card-inner">
                    <h2 class="fw-bold mb-3">{{ $item->nama }}</h2>
                    <p class="text-muted" style="line-height:1.8;">{{ $item->deskripsi }}</p>

                    <div class="mt-4 p-4 bg-white rounded-4 shadow-sm border" style="border-left: 4px solid #0d6efd;">
                        <p class="mb-2"><strong>Kategori:</strong> {{ $item->kategori }}</p>
                        <p class="mb-2"><strong>Tanggal:</strong> {{ $item->created_at->format('d M Y') }}</p>

                        @if($item->link)
                        <p class="mb-2"><strong>Link Website:</strong> {{ $item->link }}</p>
                        <div class="d-flex gap-2 mt-3">
                            <button class="btn btn-sm btn-outline-primary" onclick="window.open('{{ $item->link }}', '_blank')">
                                Preview
                            </button>
                            <a class="btn btn-sm btn-outline-primary" href="/">
                                Kembali
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="main-footer">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">ARRE TECHNOLOGY</h5>
                    <p class="small text-secondary mb-1">Jl. Suryat No.83, Gedog, Kota Blitar</p>
                    <p class="small mb-1 text-secondary"><strong>Phone:</strong> 0822-3131-6699</p>
                    <p class="small text-secondary"><strong>Email:</strong> reza@dbn.net.id</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="footer-link small">> Home</a></li>
                        <li><a href="/#about" class="footer-link small">> About Us</a></li>
                        <li><a href="/#services" class="footer-link small">> Services</a></li>
                        <li><a href="#" class="footer-link small">> Terms of service</a></li>
                        <li><a href="#" class="footer-link small">> Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li class="footer-link small">> Web Design</li>
                        <li class="footer-link small">> Web Development</li>
                        <li class="footer-link small">> Product Management</li>
                        <li class="footer-link small">> Marketing</li>
                        <li class="footer-link small">> Graphic Design</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-col-title mb-3">Our Social Networks</h5>
                    <div class="d-flex mt-3">
                        <div class="social-icon-circle me-2"><i class="fab fa-twitter"></i></div>
                        <div class="social-icon-circle me-2"><i class="fab fa-facebook-f"></i></div>
                        <div class="social-icon-circle me-2"><i class="fab fa-instagram"></i></div>
                        <div class="social-icon-circle me-2"><i class="fab fa-skype"></i></div>
                        <div class="social-icon-circle"><i class="fab fa-linkedin-in"></i></div>
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


    <button id="scrollToTopBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
       
        const scrollBtn = document.getElementById("scrollToTopBtn");
        const topProgress = document.getElementById("topProgress");

        window.addEventListener("scroll", () => {
            const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
            const scrollHeight = document.documentElement.scroll
            Height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollTop / scrollHeight) * 100;
            topProgress.style.width = scrolled + "%";

            if (scrollTop > 200) {
                scrollBtn.style.display = "flex";
            } else {
                scrollBtn.style.display = "none";
            }
            const reveals = document.querySelectorAll('.reveal');
            reveals.forEach(el => {
                const windowHeight = window.innerHeight;
                const elementTop = el.getBoundingClientRect().top;
                const elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    el.classList.add("revealed");
                } else {
                    el.classList.remove("revealed");
                }
            });
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        new WOW().init();
        const heroImg = document.getElementById("heroImg");
        let pos = 0;
        setInterval(() => {
            pos = pos === 0 ? 10 : 0;
            heroImg.style.transform = `translateY(${pos}px) scale(1.05)`;
        }, 3000);


        document.querySelectorAll('.tilt-card').forEach(card => {
            const inner = card.querySelector('.tilt-card-inner');
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const cx = rect.width / 2;
                const cy = rect.height / 2;
                const dx = (x - cx) / cx;
                const dy = (y - cy) / cy;
                inner.style.transform = `rotateY(${dx * 10}deg) rotateX(${-dy * 10}deg) scale(1.03)`;
            });
            card.addEventListener('mouseleave', () => {
                inner.style.transform = `rotateY(0deg) rotateX(0deg) scale(1)`;
            });
        });
    </script>
</body>

</html>