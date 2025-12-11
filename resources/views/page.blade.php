<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arre Technology</title>
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

        html,
        body {
            height: 100%;
            padding-top: 80px;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            color: var(--brand-900);
            scroll-behavior: smooth;
        }

        nav {
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

        .service-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(77, 166, 255, 0.18);
        }

        .service-card h5 {
            color: var(--brand-900);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-card p {
            color: var(--muted);
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

        .footer-col-title {
            color: white;
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 20px;
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

            .service-card .fa-3x {
                font-size: 2.5em;
            }

            .main-footer .col-lg-3,
            .main-footer .col-md-6 {
                margin-bottom: 30px !important;
            }
        }
        #clientCarousel {
            min-height: 450px;
            position: relative;
            padding: 0 40px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            opacity: 1;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.7);
            background-size: 100% 100%;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }
    </style>
</head>

<body>

    <div id="topProgress" aria-hidden="true"></div>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm custom-navbar">

        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero">
                <img src="/assets/img/logo-ws.png" alt="Logo" id="navbarLogo" class="logo-nav">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link nav-scroll" href="#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link nav-scroll" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link nav-scroll" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link nav-scroll" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link nav-scroll" href="#kontak">Kontak</a></li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white px-3 py-2" href="/login" style="border-radius: 8px;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="hero" class="hero">
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="hero-text order-2 order-md-1" style="max-width: 550px;">
                <h1 class="hero-title animate__animated animate__zoomIn">Jasa Pembuatan Website di Blitar</h1>
                <p class="hero-sub animate__animated animate__fadeInLeft animate__delay-1s">Arre Technology — Solutions
                    for Your Websites</p>
                <a href="#kontak" class="btn btn-primary mt-3 animate__animated animate__fadeInLeft animate__delay-2s">Mulai</a>
            </div>
            <div class="hero-image order-1 order-md-2 animate__animated animate__fadeInRight animate__delay-1s">
                <img src="/assets/img/Web devices.gif" alt="Website Creator Illustration" class="img-fluid" id="heroImg">
            </div>
        </div>
    </section>

    <section id="clients" class="clients section-bg py-5">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center mb-3 reveal">
                    <img src="/assets/img/cyber.png" alt="Client 1" loading="lazy">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center mb-3 reveal">
                    <img src="/assets/img/client-2.png" alt="Client 2" loading="lazy">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center mb-3 reveal">
                    <img src="/assets/img/client-3.png" alt="Client 3" loading="lazy">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center mb-3 reveal">
                    <img src="/assets/img/client-4.png" alt="Client 4" loading="lazy">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center mb-3 reveal">
                    <img src="/assets/img/client-5.png" alt="Client 5" loading="lazy">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center mb-3 reveal">
                    <img src="/assets/img/client-6.png" alt="Client 6" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 container">
        <h2 class="section-title reveal">Tentang Kami</h2>
        <div class="section-line"></div>
        <div class="row align-items-center mt-4">
            <div class="col-md-6 text-center reveal">
                <img src="/assets/img/About us page.gif" class="img-fluid" alt="About">
            </div>
            <div class="col-md-6 reveal">
                <p><strong>Arre Technology</strong> adalah perusahaan pengembang software yang berfokus pada solusi
                    digital di Blitar, Jawa Timur. Layanan kami meliputi pembuatan situs web, maintenance, custom software,
                    hingga mobile app development. Kami membantu bisnis dan institusi untuk bertransformasi secara
                    digital.</p>
                <a class="btn btn-primary mt-3" href="#kontak">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 container">
        <h2 class="section-title reveal">Layanan</h2>
        <p class="text-center mb-5">Arre Technology menawarkan layanan yang diformulasikan untuk menjawab kebutuhan
            teknologi serta digitalisasi produk. Setiap produk memiliki DNA-nya sendiri — konsultasikan ide Anda dengan
            kami.</p>
        <div class="section-line"></div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-globe fa-3x mb-3 text-primary"></i>
                    <h5>Website Development</h5>
                    <p>Website cepat, SEO friendly, dan mudah digunakan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-mobile-alt fa-3x mb-3 text-primary"></i>
                    <h5>Mobile App Development</h5>
                    <p>Aplikasi Android & iOS untuk memperluas jangkauan pelanggan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-rocket fa-3x mb-3 text-primary"></i>
                    <h5>MVP Development</h5>
                    <p>Kembangkan MVP untuk menguji ide dan peluang pasar.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-cogs fa-3x mb-3 text-primary"></i>
                    <h5>Custom Software Development</h5>
                    <p>Sistem yang disesuaikan untuk efisiensi proses bisnis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-paint-brush fa-3x mb-3 text-primary"></i>
                    <h5>UI/UX Design</h5>
                    <p>Desain yang memaksimalkan pengalaman dan konversi pengguna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="service-card">
                    <i class="fas fa-file-alt fa-3x mb-3 text-primary"></i>
                    <h5>Specification Document & Wireframe</h5>
                    <p>Dokumen teknis & wireframe untuk perencanaan proyek.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title reveal" style="letter-spacing: 3px;">PROJECT</h2>
                <div class="section-line"></div>
            </div>
            <div class="text-center mb-4">
                <h5 class="text-dark reveal">Klien Kami</h5>
            </div>

            @php
            $chunks = $items->chunk(3);
            $active = true;
            @endphp

            <div id="clientCarousel" class="carousel slide" data-bs-interval="false">

                <div class="carousel-indicators">
                    @foreach ($chunks as $key => $chunk)
                    <button
                        type="button"
                        data-bs-target="#clientCarousel"
                        data-bs-slide-to="{{ $key }}"
                        class="{{ $key === 0 ? 'active' : '' }}"
                        aria-label="Slide {{ $key + 1 }}">
                    </button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($chunks as $chunk)
                    <div class="carousel-item {{ $active ? 'active' : '' }}">
                        <div class="row justify-content-center portfolio-grid">
                            @foreach ($chunk as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 reveal">
                                <div class="card h-100 border-0 shadow-sm portfolio-card">

                                    @if($item->gambar && file_exists(public_path('uploads/' . $item->gambar)))
                                    <img src="{{ asset('uploads/' . $item->gambar) }}" alt="{{ $item->nama }}" class="card-img-top img-fluid rounded">
                                    @else
                                    <img src="{{ asset('uploads/default.png') }}" alt="No Image" class="card-img-top img-fluid rounded">
                                    @endif
                                    <div class="card-body text-center">
                                        <h5 class="card-title mb-3">{{ $item->nama }}</h5>
                                        <p class="card-text">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach
                </div>


                @if(count($items) > 3)
                <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                @endif
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('client.all') }}" class="btn btn-lg btn-secondary">
                    Lihat Semua Klien
                </a>
            </div>
        </div>
    </section>

    <section id="faq" class="py-5 container">
        <h2 class="section-title reveal">FAQ</h2>
        <p class="text-center">Berikut beberapa pertanyaan yang sering diajukan.</p>
        <div class="section-line"></div>

        <div class="accordion accordion-flush" id="faqAccordion">
            <div class="accordion-item reveal" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Apa saja layanan yang disediakan Arre Technology?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Arre Technology menyediakan layanan pembuatan website dan sistem informasi.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Data apa yang diperlukan untuk pengerjaan website?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami membutuhkan profil pemilik seperti nama, alamat, nomor telepon, logo, dan deskripsi lengkap.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="0.6s">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apakah bisa dibuka di berbagai device?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Semua website kami responsive dan bisa diakses di smartphone, tablet, dan desktop.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="0.8s">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Berapa lama proses pembuatan website?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Waktu pengerjaan tergantung tingkat kesulitan dan jumlah halaman. Estimasi diberikan setelah
                        menerima data lengkap.
                    </div>
                </div>
            </div>

            <div class="accordion-item reveal" data-wow-delay="1s">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Bagaimana dengan tema website?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kami menyediakan template dan juga menerima desain sesuai permintaan klien.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-5 container">
        <h2 class="section-title reveal">KONTAK KAMI</h2>
        <div class="section-line"></div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center reveal">
                <img src="/assets/img/Contact us.gif" class="img-fluid" alt="Kontak Arre Technology"
                    style="max-height: 300px; border-radius: 15px;">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm mb-5 border-0 rounded-4 reveal">
                    <div class="card-body p-4 p-md-5">

                        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                            <div class="p-3 me-4 rounded-circle bg-light"
                                style="color: var(--accent); background-color: #e6f0ff !important;">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1" style="color: var(--brand-900);">Location</h5>
                                <p class="text-muted mb-0 small">Jl. Suryat No.83, Gedog, <br>Kec. Sananwetan, <br>Kota
                                    Blitar, Jawa Timur 66132</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                            <div class="p-3 me-4 rounded-circle bg-light"
                                style="color: var(--accent); background-color: #e6f0ff !important;">
                                <i class="fas fa-envelope fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1" style="color: var(--brand-900);">Email</h5>
                                <p class="text-muted mb-0 small">reza@dbn.net.id</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="p-3 me-4 rounded-circle bg-light"
                                style="color: var(--accent); background-color: #e6f0ff !important;">
                                <i class="fas fa-phone fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1" style="color: var(--brand-900);">Telp/WA</h5>
                                <p class="text-muted mb-0 small">0822-3131-6699</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <a href="https://maps.google.com/?q=Jl.+Suryat+No.83,+Gedog,+Blitar" target="_blank"
            class="btn btn-sm btn-outline-secondary d-inline-block mb-3">Lihat peta lebih besar</a>

        <div class="map-container reveal">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.412157168169!2d112.14950387542496!3d-8.093249594180502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd619c26a8fcb91%3A0x15e69c3f632eec91!2sJl.%20Suryat%20No.83%2C%20Gedog%2C%20Blitar%2C%20Jawa%20Timur%2066132!5e0!3m2!1sid!2sid!4v1699999999999!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="main-footer">
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

    <button id="scrollToTopBtn" aria-label="Gulir ke atas" title="Ke atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
        if (typeof WOW !== 'undefined') {
            new WOW().init();
        }


        function scrollToHash(hash) {
            if (!hash) return;
            const el = document.querySelector(hash);
            if (!el) return;
            const navHeight = document.querySelector('.navbar').offsetHeight;
            const top = el.getBoundingClientRect().top + window.pageYOffset - navHeight - 12;
            window.scrollTo({
                top,
                behavior: 'smooth'
            });
        }


        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.length > 1) {
                    e.preventDefault();
                    scrollToHash(href);

                    const bsCollapse = document.querySelector('#navbarNav');
                    if (bsCollapse && bsCollapse.classList.contains('show')) {
                        new bootstrap.Collapse(bsCollapse).toggle();
                    }
                }
            });
        });


        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        window.addEventListener('scroll', () => {
            if (window.scrollY > 220) {
                scrollToTopBtn.style.display = "flex";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        });
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });


        const topProgress = document.getElementById('topProgress');

        function updateTopProgress() {
            const doc = document.documentElement;
            const scrollTop = doc.scrollTop || document.body.scrollTop;
            const height = doc.scrollHeight - doc.clientHeight;
            const percent = height ? Math.round((scrollTop / height) * 100) : 0;
            topProgress.style.width = percent + '%';
        }
        window.addEventListener('scroll', updateTopProgress);
        window.addEventListener('resize', updateTopProgress);
        updateTopProgress();


        const reveals = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');

                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        reveals.forEach(el => revealObserver.observe(el));


        const sections = Array.from(document.querySelectorAll('section[id]'));
        const navLinks = Array.from(document.querySelectorAll('.navbar .nav-link'));
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === '#' + id);
                    });
                }
            });
        }, {
            threshold: 0.45
        });

        sections.forEach(sec => sectionObserver.observe(sec));


        const heroImg = document.getElementById('heroImg');
        if (heroImg) {
            window.addEventListener('scroll', () => {
                const scrolled = window.scrollY;
                const offset = Math.min(Math.max(scrolled * 0.08, 0), 40);
                heroImg.style.transform = `translateY(${offset}px)`;
            });
        }
    </script>
</body>

</html>